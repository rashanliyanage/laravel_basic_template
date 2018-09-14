<?php

namespace App;

/**
 * created by :Rashan
 * created at: 28-08-2018
 * catagory model
 */
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table ='catagory';
    protected $fillable =[
        'type'

    ];

    public function product(){

        return $this->hasMany('App\Property');
    }
}
