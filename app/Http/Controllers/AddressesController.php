<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    //
    public function index(Request $request) {
        $addresses = Address::all();
        return $addresses;
    }

    public function findOne(Request $request) {
        $address = Address::find($request->id);
        $address['user'] = $address->user;
        return $address;
    }

    public function create(Request $request) {
        $rawData = $request->only('address');

        $address = Address::create($rawData);

        return $address;
    }
}
