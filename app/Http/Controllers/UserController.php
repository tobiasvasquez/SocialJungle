<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
        return view('configuracion');
    }

    public function update(Request $request){
        $id = \Auth::user();

        auth()->user()->update([
            'name' => $request->get('name'),
            'apellido' => $request->get('apellido'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            ]);
            return redirect('/post');

        // $request->input('name');
        // $apellido = $request->input('apellido');
        // $username = $request->input('username');
        // $email = $request->input('email');
        // // $password = $request->input('password');

        // dd($id);
        // dd($name);
        // dd($apellido);
        // dd($username);
    }

    //Seguidores

    public function followers(){
        return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
    }

    //Seguidos

    public function followings(){
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'leader_id')->withTimestamps();
    }
}
