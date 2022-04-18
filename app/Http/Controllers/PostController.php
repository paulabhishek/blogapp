<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['store', 'create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::paginate(6);
        $comments = Comment::all();
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->user()->canPost()) {
            return view('posts.create');
        } else {
        return view('/');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     *   \Illuminate\Http\Request  $request
     * \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        $post = new Post($request->all());
      $post->author_id = $request->user()->id;

        $post->save();


        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id

     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

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
     *  \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Post::find($id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->isAdmin()))
        {
            $post->delete();
        }
        return redirect('/posts');
    }
}
