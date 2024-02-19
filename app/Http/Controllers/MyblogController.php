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
        $mypost = new Myblog();
        $mypost->title = $request->title;
        $mypost->subtitle = $request->subtitle;
        $mypost->body_content = $request->body_content;
        $mypost->save();
        return redirect()->route('index');
    }

    public function edit($id){
        $mypost = Myblog::find($id);
        return view('user.edit', compact('mypost'));
    }
    public function update(Request $request, $id){
        $mypost = Myblog::find($id);
        $mypost->title = $request->title;
        $mypost->subtitle = $request->subtitle;
        $mypost->body_content = $request->body_content;
        $mypost->save();
        return redirect()->route('index');
    }
    public function destroy($id){
        $mypost = Myblog::find($id);
        $mypost->delete();
        return redirect()->route('index');
    }
}
