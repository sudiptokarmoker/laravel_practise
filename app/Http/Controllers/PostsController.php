<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostModel;
use App\Models\CommentsModel;

class PostsController extends Controller
{
    public function addPost()
    {
        $post = new PostModel();
        $post->title = "first post";
        $post->body = "first post body description";
        $post->save();

        return "Post has been created successfully";
    }

    public function addComments($id){
        $comment = new CommentsModel();
        $comment->comment = "This is first comment";
        // load post model for insert data
        $post = PostModel::find($id);
        $post->comments()->save($comment);

        return "Comments created successfully";
    }
}
