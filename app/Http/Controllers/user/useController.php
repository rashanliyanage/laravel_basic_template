<?php

namespace App\Http\Controllers\user;

use App\User;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

    }

    /**
     * created by :Rashan
     * created at: 27-08-2018
     * @param Request $data
     * @return array
     */
    public function create(Request $data){

        try {
            $validator = Validator::make($data->all(), [
                'txtfirstName' => 'required',
                'txtlastName' => 'required|max:255', // |unique:users.empid
                'txtemail' => 'required|string|email|max:255|unique:users', // unique:users.email| //'required|email|max:255|unique:users.email',
                'txtcontact' => 'required|max:12',
                'password' => 'required|min:6|confirmed', //'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'token' => '',
                'txtaddress' => 'required',
                'roleid' => 'required'
            ]);



            if ($validator->fails()) {
                return array(
                    'success' => false,
                    'errors' => $validator->errors(),
                );
            }

            $userData = array(
                'firstname' => $data['txtfirstName'],
                'lastname' => $data['txtlastName'],
                'email' => $data['txtemail'],
                'password' => bcrypt($data['txtpassword']),
                'contact' => $data['txtcontact'],
                'address' => $data['txtaddress'],
                'role_id' => $data['roleid'],
                'token' => $data['token'],
            );

            $user = User::create($userData);

            return array(
                'success'=>true,
                'msg'=>'successfully register'
            );

        }catch (Exception $ex){

            return array(
                'success' => false,
                'errors' => $ex->getMessage(),
            );
        }

    }
}
