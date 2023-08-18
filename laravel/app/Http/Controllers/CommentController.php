<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post)
    {
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->input(["comment"]);
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route('post.show',$post);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
