<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillingAddressRequest;
use App\Http\Requests\UpdateBillingAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VitalsController extends Controller
{
    //BILLING ADDRESS PAGE
    public function billingAddress(){
        $address = Address::where('user_id', auth()->id())->first();
        if($address){
            return view('vitals.edit-billing-address', [
                'address' => $address
            ]);
        }
        return view('vitals.billing-address');
    }

    // CHANGE PASSWORD IN BILLING ADDRESS PAGE
    public function changePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        $user = auth()->user();

        if(!Hash::check($request->current_password, $user->password)){
            return back()->with('message', 'Current password does not match');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('message', 'Password updated');
    }

    // STORES BILLING ADDRESS FORM
    public function storeBillingAddress(BillingAddressRequest $request){
        Address::create([
            'user_id' => auth()->id(),
            'first_name' => $request->first_name,
            'surname' => $request->surname,
            'mobile_number' => $request->mobile_number,
            'postal_code' => $request->postal_code,
            'state' => $request->state,
            'city' => $request->city,
            'street_address' => $request->street_address,
            'email' => $request->email,
            'country' => $request->country
        ]);

        return back()->with('message', 'Billing Address Created');
    }

    // UPDATES BILLING ADDRESS
    public function updateBillingAddress(Request $request, $id){

        $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'mobile_number' => 'required',
            'postal_code' => 'nullable',
            'state' => 'required',
            'city' => 'nullable',
            'street_address' => 'required',
            'email' => 'required|email',
        ]);

        Address::where('id', $id)->update([
            'user_id' => auth()->id(),
            'first_name' => $request->first_name,
            'surname' => $request->surname,
            'mobile_number' => $request->mobile_number,
            'postal_code' => $request->postal_code,
            'state' => $request->state,
            'city' => $request->city,
            'street_address' => $request->street_address,
            'email' => $request->email,
            'country' => $request->country
        ]);

        return back();
    }



}
