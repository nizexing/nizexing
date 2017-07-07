<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
   public function getPlay(Request $request){

        return view('home.play.play');
   }
}
