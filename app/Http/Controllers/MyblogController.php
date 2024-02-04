<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myblog;

class MyblogController extends Controller
{
    public function index(){
        $myposts = Myblog::get();
        return view('user.index', compact('myposts'));
    }

    public function create(){
        return view('user.create');
    }

    public function aboutus(){
        return view('user.aboutus');
    }

    public function contactus(){
        return view('user.contactus');
    }

    public function store(Request $request){
        $myblog = new Myblog();
        $myblog->title = $request->title;
        $myblog->subtitle = $request->subtitle;
        $myblog->body_content = $request->body_content;
        $myblog->save();
        return redirect()->route('index');




    }
}
