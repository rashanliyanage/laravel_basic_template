<?php
/**
 * created by : Rashan
 * created at: 28-08-2018
 */
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard ='admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'fullname', 'email','contact','password','role_id','	is_subscribed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','custom_id' ,'remember_token',
    ];

   public function Role(){

       return $this->belongsTo("App\Role",'role_id');
   }

   public function Property(){
       return $this->hasMany('App\Property');

   }

}
