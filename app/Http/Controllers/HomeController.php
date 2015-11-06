<?php

namespace App\Http\Controllers;

use Request;
use App\blogs;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function aboutme(){

        $dataes = blogs::get();

        return view('pages.about',compact('dataes'));

    }


    public function savearticle(){
       $input=Request::all();
        blogs::create($input);


        return redirect('about');
    }

}
