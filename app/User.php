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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','firstname','lastname','contact','address','token','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function Role(){

       return $this->belongsTo("App\Role",'role_id');
   }

   public function product(){
       return $this->hasMany('App\Product');

   }

}
