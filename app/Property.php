<?php
/**
 * created by :Rashan
 * created at: 28-08-2018
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table ='product';
    protected $fillable =[
    'name','heading','town','price','contactname','contactemail','latitude','longitude','heading','user_id','catagory_id','updated_at','created_at'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');

    }
    public function catagory(){
        return $this->belongsTo('App\Catagory','catagory_id');
    }

    public function PropertyImage(){
        return $this->hasMany('App\PropertyImage');
    }
}
