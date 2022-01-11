<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class LoginController extends Controller
{
    /**
     * Show the application login page.
     */
    public function index()
    {
        return view('login');
    }


    //  authenticated username and password

    public function authenticated(Request $request){
            
        $this->validate($request,[

            'username' => 'required',

            'password' => 'required',

        ]);

        if ($request->input('username') == 'akash' && $request->input('password') == '12345678') {

            $request->session()->put('user', ['username' => $request->input('username'),'time' => time()]);

            return redirect('dashboard');

        }else
        {
            return back()->withErrors('username','Username and Password is Invalid');
        }
       
    }

    // logout the session

    public function logout(Request $request){

        $request->session()->forget('user');

        session_unset();

        return redirect('/');

    }
}
