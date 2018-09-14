<?php
/**
 * Created by PhpStorm.
 * User: Samith
 * Date: 9/4/2018
 * Time: 5:34 PM
 */

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
class RoleController  extends  BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public  function index(){

        if( Auth::user()->role_id == 1){
            return view ('dashboard.component.create-new-role');
        } else {
            return redirect(route('home'));
        }



    }


    public function createNewRole(Request $request){

        $validation = Validator::make($request->all(), [
            'type' => 'required|unique:role',

        ]);

        if ($validation ->fails())
        {
             return response()->json(["data"=>$validation->errors()->first()]);
        }

         $newRole = new Role;
         $newRole->type =$request->type;
         if($newRole->save()){

             return response()->json(["data"=>"success add new role"]);
         }

    }

}
