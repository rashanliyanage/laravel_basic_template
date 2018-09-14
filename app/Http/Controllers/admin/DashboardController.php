<?php
/**
 * Created by PhpStorm.
 * User: Samith
 * Date: 9/3/2018
 * Time: 10:17 AM
 */

namespace App\Http\Controllers\admin;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends  BaseController
{

    public function __construct()
    {


        $this->middleware('auth');
    }

    public  function index(){

        if( Auth::user()->role_id == 1){
            return view ('dashboard.component.user');
        } else {
            return redirect(route('home'));
        }

    }

}
