<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    // Home
  public function home(){
    return view('static_pages/home');
  }

  // help
  public function help(){
    return view('static_pages/help');
  }

  public function about(){
    return view('static_pages/about');
  }
}
