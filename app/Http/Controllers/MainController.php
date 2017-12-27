<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getIndex(){
    	$comments = Comment::orderBy('id','desc')->paginate(10);
    	return view('welcome')->withComments($comments);
    }

    public function getAbout(){
    	return view('about');
    }
}


	