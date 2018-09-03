<?php
/**
 * Created by PhpStorm.
 * User: Samith
 * Date: 8/29/2018
 * Time: 10:08 AM
 */

namespace App\Http\Controllers\property;
use Illuminate\Support\Facades\Storage;
use App\Catagory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PropertyController extends  BaseController

{
    /**
     * cteated by : Rashan
     * created at :30-08-2018
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request){


        $catagory ="samith";

        $directories = Storage::directories('upload');

        foreach ($directories as $directry ){

            if( $directry == 'upload/'.$catagory){
                
                if($request->hasFile('image')){
                    $file     = $request->file('image');
                    $fileName = rand(1, 999).date('m-d-Y_hia').$file->getClientOriginalName();
                    $path = $file->storeAs('upload/'.$catagory, $fileName);
                    return response()->json(['success'=> $path] );
                }

            }

        }

        Storage::makeDirectory('upload/'.$catagory);
        if($request->hasFile('image')){
            $file     = $request->file('image');
            $fileName = rand(1, 999).date('m-d-Y_hia').$file->getClientOriginalName();
            $path = $file->storeAs('upload/'.$catagory, $fileName);
            return response()->json(['success'=> $path] );
        }




        return response()->json(['success'=>$request["txtname"]] );


    }



}
