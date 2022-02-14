<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // public function create()
    // {
    //     return view('register.create');
    // }
    public function store()
    {

        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);
        return response()->noContent(201);
    }
}
