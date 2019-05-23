<?php

namespace App\Http\Controllers;

use App\Blog;
use http\Message\Body;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add(Request $request){

//        dump($request -> input('title'));
//        dump($request -> input('body'));

        $title = $request -> input('title');
        $body = $request -> input('body');

        //save to DB
        $blog = new Blog;

        $blog -> title = $title;
        $blog -> body = $body;
        $blog -> save();

        $data = ['blog' => $blog];

        return view('blog',$data);

    }

    public function show(){

        $blogs = Blog::orderBy('id', 'desc')->get();
        $data = ['blogs' => $blogs];
        return view('show',$data);
    }

    public function blogShow($id){

        $blog = Blog::where('id',$id)->first();

//        echo $blog->body;

        $data = ['blog' => $blog];

        return view('blog',$data);
    }

    public function editShow($id){
        $blog = Blog::where('id',$id)->first();

//        echo $blog->body;

        $data = ['blog' => $blog];

        return view('edit',$data);
    }

    public function edit($id,Request $request){
        $blog = Blog::where('id',$id)->first();

        $title = $request -> input('title');
        $body = $request -> input('body');


        $blog -> title = $title;
        $blog -> body = $body;

        $blog -> update();

        $data = ['blog' => $blog];
        return view('blog',$data);
    }
}
