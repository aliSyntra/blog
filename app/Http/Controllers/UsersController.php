<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($id) {
        $users = \DB::table('users')->where('id',$id)->first();
        // We vangen de id met de methode show, welke is meegekomen vanuit onze routes (web.php)
//     dd($users);
        return view('users', ['user' => $users]);
   
    }
        
}
