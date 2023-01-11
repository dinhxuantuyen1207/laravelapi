<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
use App\Models\DanhMuc;
use App\Models\Post;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\v1\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category_post = Post::with('category')->where('post_category_id',$id)->paginate(3);
        $category = CategoryPost::all();
        $title_category = CategoryPost::find($id);
        $viewest_post = Post::orderBy('views','DESC')->where('post_category_id',$id)->limit(5)->get();
        $category_recomment = CategoryPost::whereNotIn('id',[$id])->get();
        return view('pages.category')->with(compact('category','category_post','title_category','viewest_post','category_recomment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\v1\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    //ssssss
    public function edit(DanhMuc $danhMuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Api\v1\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DanhMuc $danhMuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\v1\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(DanhMuc $danhMuc)
    {
        //
    }
}
