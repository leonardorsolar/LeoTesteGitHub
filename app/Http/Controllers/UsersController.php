<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

     public function allUsers()
     {
        $users = \DB::select('SELECT * FROM users WHERE 1=1');
         return view ('users.aprendendo_rotas', ['users'=>$users]);
     }   

}
