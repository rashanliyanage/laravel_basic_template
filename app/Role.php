<?php
/**
 * created by :Rashan
 * created at: 28-08-2018
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Role extends Model
{


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='role';
    protected $fillable = [
        'type'
    ];

   public function user(){
       return $this->hasMany('App\User');
   }
}
