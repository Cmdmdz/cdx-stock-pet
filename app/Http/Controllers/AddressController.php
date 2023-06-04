<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Order;
use App\Models\User;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Begin transaction
        DB::beginTransaction();

        try {
            // Save address
            $address = new Address;
            $address->user_id = $request->user()->id;
            $address->country = $request->country;
            $address->company_name = $request->company_name;
            $address->address = $request->address;
            $address->town_city = $request->town_city;
            $address->state_county = $request->state_county;
            $address->postcode_zip = $request->postcode_zip;
            $address->save();

            // Commit the transaction
            DB::commit();

            return response()->json([
                'message' => 'Save successful'
            ], 201);
        } catch (\Exception $e) {
            // An error occurred; cancel the transaction...
            DB::rollback();

            // and return an error message
            return response()->json([
                'message' => 'Error :'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
