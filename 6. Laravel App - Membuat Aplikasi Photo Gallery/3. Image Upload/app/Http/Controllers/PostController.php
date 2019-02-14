<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = New Post;
        $post->description = $request->description;
        $post->user_id = auth()->id();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $post->image = $fileName;
        }

        $post->save();
        return back();
    }
}
