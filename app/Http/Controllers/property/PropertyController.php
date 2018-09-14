<?php
/**
 * Created by PhpStorm.
 * User: Samith
 * Date: 8/29/2018
 * Time: 10:08 AM
 */

namespace App\Http\Controllers\property;
use App\Property;
use http\Env\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Catagory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
class PropertyController extends  BaseController

{

    public function index(){
        $property_types = Catagory::all();

        return view('property.add-property')->with('properties',$property_types);
    }

    /**
     * cteated by : Rashan
     * created at :30-08-2018
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request){

//        return response()->json(['success'=>$request->all()]);

        if($request->hasFile('images')){

        request()->validate([
            'images' => 'max:5',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'property_type' => 'required|string',
            'location' => 'required|string',
            'rooms' => 'required|numeric',
            'landsize' => 'required|numeric',
            'bathsize' => 'required|numeric',
            'housesize' => 'required|numeric',
            'address' => 'required|string',
            'description' => 'required|string|',
            'cost' => 'required|string',
            'is_negotiable' => 'required|boolean',
            'name' => 'required|string',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:12',

        ]);

        }

        $path =null;
        $catagory =$request['property_type'];

        $directories = Storage::directories('upload');

        foreach ($directories as $directry ){

            if( $directry == 'public/'.$catagory){
                
                if($request->hasFile('images')){

                    foreach ( $request->file('images') as $file){

//                        $fileName = rand(1, 999).date('m-d-Y_hia').$file->getClientOriginalName();
                        $fileName = $file->getClientOriginalName();
                        $path = $file->storeAs('public/'.$catagory, $fileName);

                    }



                }

            }

        }

        Storage::makeDirectory('public/'.$catagory);
        if($request->hasFile('images')){

            foreach ( $request->file('images') as $file){
//                $fileName = rand(1, 999).date('m-d-Y_hia').$file->getClientOriginalName();
                $fileName = $file->getClientOriginalName();
                $path= $file->storeAs('public/'.$catagory, $fileName);
            }

        }


        $user_id =Auth::user()->id;
        $catagories = Catagory::all();
        $selected_property_id =null;

        foreach ($catagories as $type){
            if($type->type === $request['property_type']){
                $selected_property_id = $type->id;

            }

        }

        $newProperty = new Property();
        $newProperty->catagory_id =$selected_property_id;
        $newProperty->name = $request['name'];
        $newProperty->location_id =3;
        $newProperty->rooms_count =$request['rooms'];
        $newProperty->land_size =$request['landsize'];
        $newProperty->bath_count =$request['bathsize'];
        $newProperty->house_size =$request['housesize'];
        $newProperty->address =$request['address'];
        $newProperty->description =$request['description'];
        $newProperty->cost =$request['cost'];
        $newProperty->phone_number =$request['phone'];
        $newProperty->is_negotiable =$request['is_negotiable'];
        $newProperty->email =$request['email'];
        $newProperty->user_id =$user_id;

        if($newProperty->save()){

            return response()->json(["data"=>"success add new property"]);
        }




    }



}
