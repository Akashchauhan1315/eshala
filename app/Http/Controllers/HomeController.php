<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Change Text function.
     *
     */

    public function changeText(Request $request){

        if($request->ajax()){
            
            return response(['status' =>"success",'statuscode' => 200,'message' => "Hello Akash"], 200);
        }
    }
}
