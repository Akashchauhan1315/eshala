<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Show the application product page.
     */
    public function index()
    {
        return view('product');
    }

    /**
     * Create the application Product .
     */

    public function createproduct(Request $request){

        if($request->ajax()){
            
            $input=$request->all();

            $input['datetime']=Carbon::now()->format('Y-m-d H:i:s');

            return response(['status' =>"success",'statuscode' => 200,'data'=>$input,'message' => "Product Create"], 200);
        }
    }
}
