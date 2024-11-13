<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user = \App\Models\MyfirstTable::all();
        return $user;
    }
}
