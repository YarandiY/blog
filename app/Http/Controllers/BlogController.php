<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add(Request $request){
        dump($request -> input('title'));
        dump($request -> input('body'));
        dump($request -> input('test'));


        $title = $request -> input('title');
        $body = $request -> input('body');

        //save to DB

    }
}
