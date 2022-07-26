<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::where('user_id',Auth::id())->latest()->paginate(5);
        
        return view('post.index',compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $id=Auth::id();
        return view('post.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'content' => 'required',
        ]);

        $id=Auth::id();
        Post::create([
            'content'=>$request->input('content'),
            'user_id'=>$id
        ]);
        

        return redirect()->route('posts.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)

    {

        return view('post.show',compact('post'));

    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)

    {

        return view('post.edit',compact('post'));

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


            'content' => 'required',

        ]);

    

        $post->update($request->all());

    

        return redirect()->route('posts.index')

                        ->with('success','Post updated successfully');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)

    {

        $post->delete();

    

        return redirect()->route('posts.index')->with('success','Post deleted successfully');

    }
}
