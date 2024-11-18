<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Students;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use App\Models\StdGrpV2;

class UniverController extends Controller
{
    public function list_s(){

        $students = Students::with('groups')->get();

        return response()->json($students);

    }

    public function list_s_id()
    {
        $id = request()->get('id');
        $testmvc = \App\Models\Students::with('groups')->where('id', $id)->get();
        return $testmvc;
    }

    public function teststd(){
        $testmvc = \App\Models\StdGrpV2::all();
        return $testmvc;
    }

    public function list_t(): BelongsTo
    {
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
