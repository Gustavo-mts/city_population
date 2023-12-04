<?php

namespace App\Http\Controllers;
use App\Models\Population;
use Illuminate\Http\Request;

class PopulationController extends Controller
{
    public function index(Request $request) {
        $population = Population::all();
        return $population;
    }

    public function findOne(Request $request) {
        $Population = Population::find($request->id);
        $Population['name'] = $Population->user;
        return $Population;
    }

    public function create(Request $request) {
        $rawData = $request->all();
        $Population = Population::create($rawData);

        return $Population;
    }
}
