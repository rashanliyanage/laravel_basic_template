<?php
/**
 * Created by PhpStorm.
 * User: Samith
 * Date: 9/3/2018
 * Time: 10:17 AM
 */

namespace App\Http\Controllers\admin;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends  BaseController
{

    public  function index(){

        return view ('dashboard.layout');
    }

}
