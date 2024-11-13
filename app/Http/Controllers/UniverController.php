<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniverController extends Controller
{
    public function list_s(){

        $testmvc = \App\Models\Students::all();
        return $testmvc;
    }

    public function list_t(){

        $testmvc = \App\Models\Teachers::all();
        return $testmvc;
    }

    public function list_sub(){

        $testmvc = \App\Models\Subjects::all();
        return $testmvc;
    }

    public function list_g(){

        $testmvc = \App\Models\Groups::all();
        return $testmvc;
    }
}
