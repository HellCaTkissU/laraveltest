<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class UniverController extends Controller
{
    public function list_s_id(){

        $id = request()->get('id');
        $testmvc = \App\Models\Students::where('id', $id)->get();
        return $testmvc;
    }


    public function list_s(){

        $testmvc = \App\Models\Students::all();
        return $testmvc;
    }

//    public function getSingle($slug) {
//        $post = Post::where('slug', $slug)->take(1)->get();
//        return view('blog/single')->with('post', $post);
//    }




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
