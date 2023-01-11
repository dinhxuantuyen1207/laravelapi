<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category')->orderBy('id','DESC')->paginate(5);

        return view('layouts.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPost::all();
        return view('layouts.post.create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->post_date = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');;
        $post->views = $request->views;
        $post->title = $request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_category_id = $request->post_category_id;
        if($request['image']){
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            $image->move('uploads', $name);
            $post->image = $name;
        }else {
            $post->image = 'default.jpg';
        }
        $post->save();
        return redirect()->route('post.index')->with('success','Post Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post  = Post::find($id);
        $category = CategoryPost::all();
        return view('layouts.post.show')->with(compact('category', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$post)
    {
        $post = Post::find($post);
        $post->views = $request->views;
        $post->title = $request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_category_id = $request->post_category_id;
        if($request['image']){
            if($post->image != 'default.jpg'){
                unlink('uploads/'.$post->image);
            }
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            $image->move('uploads', $name);
            $post->image = $name;
        }
        $post->save();
        return redirect()->route('post.index')->with('success','Post Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = 'uploads/';
        $post = Post::find($id);
        if($post->image != 'default.jpg'){
            unlink($path.$post->image);
        }
        $post->delete();

        return redirect()->back();
    }
}
