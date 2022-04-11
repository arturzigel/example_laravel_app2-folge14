<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartpageController extends Controller
{
    public function index(){
        //sortiert nach neuste oben
        //letzte 5 Beiträge
        //$posts = Post::all()->sortByDesc("created_at");
        //dd($posts = Post::all()->count());
        $posts = Post::latest()->active()->limit(5)->get();


        //als gelöscht markierte sollen ausgeblendet werden
        return view("index", compact("posts"));
    }
}
