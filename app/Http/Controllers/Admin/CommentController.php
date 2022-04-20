<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $model;

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    public function index($id)
    {
        if(!$user = User::find($id)){
            return redirect()->back();
        }

        $comments = $user->comments()->get();
        return view('users.comments.index', ['user'=>$user, 'comments'=>$comments]);
    }
}
