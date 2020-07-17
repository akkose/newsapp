<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //GEt All
    public function index(){
        $comments = Comment::with(['author','post'])->paginate();
        return view( 'comments.comments')->withComments($comments);

    }
    //GEt İd
    public function show($id){
        $comments=Comment::find($id);
        return view('comments.comment')->withComment($comments);
    }

}
