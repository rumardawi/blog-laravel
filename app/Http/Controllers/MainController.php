<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome($value='')
    {
    	return view('welcome');
    }
    public function testing2($value='')
    {
    	return view('testing2');
    }
    public function about($value='')
    {
    	return view('about');
	}
	 public function contact($value='')
  	{
   	 return view('contact');
  	}
}
