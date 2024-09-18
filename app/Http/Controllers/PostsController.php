<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create(Request $request){
        $incomingField = $request->validate([
            'title' => 'required',
            'image'=>'required|url',
            'content' => 'required',
        ]);
        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['image'] = strip_tags($incomingField['image']);
        // $incomingField['content'] = strip_tags($incomingField['content']);
        $incomingField['user_id'] = Auth::id();
        Post::create($incomingField);
        return redirect('/managePost/' . Auth::user()->id);
    }
    public function get_post(Post $post){
        return View('postDetail',['post'=>$post]);
    }
    public function get_edit_post(Post $post){
        return View('edit_post',['post' => $post]);
    }
    public  function  editPost(Post $post, Request $request){
            if(auth::user()->id !== $post['user_id']){
                return redirect('/');
            }
            $incomingField = $request->validate(['title'=>'required','image'=>'required','content'=>'required']);
            $incomingField['title']  = strip_tags($incomingField['title']);
            $incomingField['image']  = strip_tags($incomingField['image']);
            // $incomingField['content']  = strip_tags($incomingField['content']);
            $post->update($incomingField);
            return redirect('/managePost/' . Auth::user()->id);
    }

    public function deletePost(Post $post){
        if(auth::user()->id === $post['user_id']){
            $post->delete();
        }
        return redirect('/managePost/' . Auth::user()->id);
    }
}
