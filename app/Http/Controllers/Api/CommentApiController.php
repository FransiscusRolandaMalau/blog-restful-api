<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'id' => 'required'
        ]);

        $comment = new Comment();
        $comment->comment = $request->get('comment');
        $comment->post_id = $request->get('id');
        $comment->author_id = $request->user()->id;
        $comment->save();

        return new CommentResource($comment);
    }
}
