<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $table = "breeds";
    protected $dates = ['created_at', 'updated_at', 'born_at'];


}
