<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $data['title'] = strip_tags($data['title']);
        $data['body'] = strip_tags($data['body']);
        $data['user_id'] = auth()->user()->id;
        Posts::create($data);
        return redirect('/');

    }
}
