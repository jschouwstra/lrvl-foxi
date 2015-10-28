<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Dog;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::all(); 
        $dog = Dog::all(); 
        //$dog = Dog::find(3); 

        return view('users',['users' => $user, 'dogs' => $dog]);          
    }
}
