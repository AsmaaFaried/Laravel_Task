<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class PostController extends Controller
{

    public function index(){


        $user=User::where('id',Auth::id())->first();
        if($user->role == '1'){
            $posts=Post::all();
            return Response()->json(['All posts'=>$posts]);

        }
        return Response()->json(['All your posts'=>$user->posts]);
    }
}
