<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function update(Request $request)
    {
        $data = $request->validate([
            'country' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'nullable',
            'address' => 'required',
            'apartment' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $user = Auth::user();
        $user->update($data);

        return redirect()->back()->with('success', 'User data updated successfully!');
    }

}
