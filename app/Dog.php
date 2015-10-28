<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = "dogs";
    protected $dates = ['created_at', 'updated_at', 'born_at'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function breed() {
    	return $this->belongsTo('App\Breed');
    }

    public function shots() {
    	return $this->belongsToMany('App\Shot');
    }
}
