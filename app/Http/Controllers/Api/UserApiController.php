<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(){
        $user =User::paginate();
        return UserResource::collection($user);
    }

    public function posts($id){
        $author=User::find($id);
        $posts = $author->posts;
        return PostResource::collection($posts);
    }
}
