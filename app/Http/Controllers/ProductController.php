<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Stock;

class ProductController extends Controller
{

    public function __invoke()
    {
        $products = Product::with('stock')->get();
        return view('pages.product', compact('products'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'required|image',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'quantity' => 'required|integer', // Add validation for quantity
        ]);

        // Save the image to the public/images folder
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('/', $imageName, 'public_images');

        // Create a new product
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => 'images/' . $imageName,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
        ]);

        // Create a new stock entry associated with the created product
        Stock::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
        ]);

        return redirect('/admin/product')->with('success', 'Product created successfully.');
    }


    public function show($id)
    {
        // $product = ;

        return Product::findOrFail($id);
    }

    public function showProductOnCustomer($id)
    {
        // $product = ;
        return Product::with('stock')->findOrFail($id);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.edit-product', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'quantity' => 'required|integer', // Add validation for quantity
        ]);

        $product = Product::findOrFail($id);

        // Update the associated stock entry
        $stock = $product->stock;
        $stock->quantity = $request->quantity;
        $stock->save();

        if ($request->hasFile('image')) {
            // Delete the existing image
            $oldImagePath = str_replace('images/', '', $product->image);
            Storage::disk('public_images')->delete($oldImagePath);

            // Save the new image to the public/images folder
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/', $imageName, 'public_images');
            $product->image = 'images/' . $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount ?? 0;

        $product->save();
        return redirect('/admin/product')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete the stock associated with the product
        $stock = Stock::where('product_id', $id)->first();
        if ($stock) {
            $stock->delete();
        }

        // Remove the 'images/' prefix from the image path
        $imagePath = str_replace('images/', '', $product->image);

        Storage::disk('public_images')->delete($imagePath);

        $product->delete();

        return redirect('/admin/product')->with('success', 'Product and stock deleted successfully.');
    }
}
