<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //Relacion muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //Relacion de muchos a uno
    public function image(){
        return $this->belongdTo('App\Image', 'image_id');
    }
}
