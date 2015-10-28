<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model
{
    protected $table = "shots";

    public function dogs() {
    	return $this->belongsToMany('App\Dog');
    }
}
