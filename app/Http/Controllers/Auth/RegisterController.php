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
    protected $redirectTo = '/';

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

    public function index(){


    }
    public function showRegistrationForm()
    {
            $roles =Role::where('custom_id','>',9)->get();

        return view('auth.register')->with('roles',$roles);
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
            'txtfullname' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'txtcontact' => 'required|max:12',
            'password' => 'required|min:6|confirmed',
            'txtrole'=>'required',
            'password_confirmation' => 'required|min:6',



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

        foreach ($roles as $role){
          if($role->type === $data['txtrole']){
              $role_id =$role->id;
          }
        }
        return User::create([
            'fullname' => $data['txtfullname'],
            'email' => $data['email'],
            'contact' => $data['txtcontact'],
            'is_subscribed'=> $data['txtsubscribe'],
            'password' => Hash::make($data['password']),
            'role_id' => $role_id,

        ]);
    }
}
