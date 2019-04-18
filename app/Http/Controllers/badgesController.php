<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class badgesController extends Controller
{
    public function tampil_badges(){

      $badges = 3;

      return view('layouts.index')->with('badges' , $badges);

    }
}
