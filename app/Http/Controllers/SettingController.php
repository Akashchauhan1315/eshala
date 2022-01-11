<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Show the application Setting page.
     *
     */

    public function index()
    {
        return view('setting');
    }

    /**
     * Create Setting User.
     */

    public function createUser(Request $request){

        if($request->ajax()){
            
            $input=$request->all();

            $input['username']=$request->name.rand(0, 10000);

            return response(['status' =>"success",'statuscode' => 200,'data'=>$input,'message' => "Product Create"], 200);
        }
    }
}
