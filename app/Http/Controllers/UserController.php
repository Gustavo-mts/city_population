<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request) {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $request) {
        $user = User::find($request->id);
        $user['addresses'] = $user->addresses;
        return $user;
    }

    public function create(Request $request) {
        $rawData = $request->only('name', 'email', 'password');

        $user = User::create($rawData);

        return $user;
    }
}
