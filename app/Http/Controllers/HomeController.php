<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
       
        return view('home');
    }


    public function login($id)
    {

        if($id == "sukses")
        {
            Flash::success('Register insert successfully.');
           
        } 

        return view('auth.login');  
        
      
    }
}
