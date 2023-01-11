<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(){
        $keywords = $_GET['keywords'];
        $category_post = Post::with('category')->where('title','like','%'.$keywords.'%')
        ->orwhere('short_desc','like','%'.$keywords.'%')
        ->orwhere('desc','like','%'.$keywords.'%')
        ->get();
        $category = CategoryPost::all();
        return view('pages.timkiem')->with(compact('category','category_post','keywords'));
    }
    public function index()
    {
        $all_post = Post::with('category')->paginate(5);
        // $newest_post = Post::all()->random(5);
        $newest_post = Post::orderBy(DB::raw('RAND()'))->limit(5)->get();
        $viewest_post = Post::orderBy('views','DESC')->limit(5)->get();
        $category = CategoryPost::all();
        return view('pages.main')->with(compact('category','all_post','newest_post','viewest_post'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
