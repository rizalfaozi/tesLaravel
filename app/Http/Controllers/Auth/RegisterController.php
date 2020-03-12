<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Library\RegistersUsers;
use Flash;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
   use RegistersUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'brithday' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'term_co' => 'required|string|max:80',
            'credit-card-number' => 'required|ccn',
            'credit-card-date' => 'required|ccd',
            'credit-validation-code' => 'required|cvc',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['address'] =="")
        {
           $address = "";

        }else{

           $address = $data['address'];
        }    

         if($data['original_address'] =="")
        {
           $oriaddress = "";

        }else{

           $oriaddress = $data['original_address'];
        } 




        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'term_co' => $data['term_co'],
            'brithday' => $data['brithday'],
            'address' => $address,
            'original_address' => $oriaddress,
            'type' => $data['type'],
            'credit-card-number' => $data['credit-card-number'],
            'credit-card-date' => $data['credit-card-date'],
            'credit-validation-code' => $data['credit-validation-code'],
            'password' => bcrypt($data['password'])
        ]);

        
        

    }

   
}
