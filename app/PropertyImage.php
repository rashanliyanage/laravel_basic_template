<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $fillable = [
        'post_id','image_url'
    ];

    public function Property(){
        return $this->hasOne('App\Property');
    }
}
