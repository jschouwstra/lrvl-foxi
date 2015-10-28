<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

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
        return view('users',['users' => $user]);  
    }

    // public function getDog(){
    //     $dog = User::find(1)->dog;
    //     return view('users',['dog' =>$dog]);
    // }
}
