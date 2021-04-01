<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'email'=>'email|required|unique:user,email',
            'name'=> 'required',
            'password' => 'required:min:6',
        ]);
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),

        ]);
        return $user;
    }
}
