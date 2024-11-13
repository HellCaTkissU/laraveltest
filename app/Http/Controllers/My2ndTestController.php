<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class My2ndTestController extends Controller
{
    public function index(){

        $testmvc = \App\Models\mytest2::all();
        return $testmvc;
    }
}
