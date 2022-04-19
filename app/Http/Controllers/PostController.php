<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Http\Requests\PostFormRequest;
use DateTime;
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

        $posts = Post::paginate(5);
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
        if ($request->hasFile('file') &&
            $request->file('file')->isValid()) {
            $path = $request->file->storePublicly('posts', './public');
            $post->file =$path;
            $post->save();
        }


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

public static function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

}
