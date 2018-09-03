<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     *
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * crated by : Rashan
     * created at: 28-08-2018
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'txtfirstName' => 'required',
            'txtlastName' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'txtcontact' => 'required|max:12',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'txtaddress' => 'required',

        ]);
    }

    /**
     * created by : Rashan
     * created at : 28-08-2018
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function create(array $data)
    {

        $roles =Role::all();
        $role_id =0;
        foreach ($roles as $role){
          if($role->id ==2){
              $role_id =$role->id;
          }
        }
        return User::create([
            'firstname' => $data['txtfirstName'],
            'lastname' => $data['txtlastName'],
            'email' => $data['email'],
            'contact' => $data['txtcontact'],
            'address' => $data['txtaddress'],
            'role_id' => $role_id,
            'password' => Hash::make($data['password']),
        ]);
    }
}
