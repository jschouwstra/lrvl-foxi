<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = "dogs";

    public function user(){
        return $this->hasOne('App\User');

    }
}
