<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request) {
        $cities = City::all();
        return $cities;
    }

    public function findOne(Request $request) {
        $City = City::find($request->id);
        $City['name'] = $City->user;
        return $City;
    }

    public function create(Request $request) {
        $rawData = $request->all();
        $City = City::create($rawData);

        return $City;
    }
}
