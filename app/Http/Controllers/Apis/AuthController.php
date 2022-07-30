<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){

        $user=User::firstOrCreate([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
        ]);

        $token=$user->createToken('myapptoken')->plainTextToken;

        return response()->json(["message"=>"User is added successfully",'User'=>$user,"Token"=>$token],201);


    }

    public function login(Request $request){
        $user=User::where("email",$request->input('email'))->first();
        if(!$user | !Hash::check($request->input('password'),$user['password'])){
            return response(['message'=>'Password is invalid '],401);
        }
        $token=$user->createToken('myapptoken')->plainTextToken;

        return response(['user'=>$user,'Token'=>$token],201);
    }
}
