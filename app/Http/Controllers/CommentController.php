<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post){

    	$this -> validate(request(),[
    		'body' => 'required'
    	]);


$comment = new Comment;
$comment->body = request('body');
$comment->post_id = $post->id;
$comment->user_id = auth()->id();
$comment->save();

/*
    	Comment::create([
    		'body' => request('body'),
    		'post_id' => $post->id,
    		'user_id' => auth()->id(),
    		'jopa' => 'jopishe'
    	]);
*/
    	return back();
    }
}
