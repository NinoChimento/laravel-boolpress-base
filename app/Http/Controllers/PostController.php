<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("Posts.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Posts.PostCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate([
        "title"=> "required|string",
        "genre"=> "required|string|max:200",
        "description"=> "required|string",
    ]);
        $data = $request->all();
        $post = new Post;
        $post->fill($data);
        $response = $post->save();
       if($response){
           return redirect()->route("posts.index");
       }
       else{
           abort("404");
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    { 
        // $post = Post::all()->find($id);
       
        return view("Posts.PostShow",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   
        return view("Posts.PostEdit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "title" => "required|string",
            "genre" => "required|string|max:200",
            "description" => "required|string",
        ]);
        $data= $request->all();
      
        $response = $post->update($data);
      
        if($response){
            return redirect()->route("posts.index")->with("update", $post);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
      
        // $post = Post::all()->find($id);
        $response = $post->delete();
        if($response){
          return redirect()->route("posts.index")->with("delete",$post);
        }
    }
}
