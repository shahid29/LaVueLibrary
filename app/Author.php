<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books(){
        return $this->hasMany('App\Book');
    }

    public function borrows(){
        return $this->hasMany('App\User');
    }
}
