<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//hay que añadir el modelo para coger todos los posts...
use App\Models\Post;
use App\Models\Writer;
//necesario para el slug
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('visible', 1)->simplePaginate(4);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Writer::all();
        return view('posts.create', compact('autores'));
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
        $post->title = $request->get('title');
        $post->slug = Str::slug($post->title);
        $post->content = $request->get('content');
        $post->visible = $request->has('visible')? 1: 0;
        $post->writer()->associate(Writer::findOrFail($request->get('writer')));
        $post->save();

        return view('posts.saved', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        //         $post = Post::findOrFail($id);
        //         if($post->visible==0){
        //             return redirect()->route('posts.index');
        //         }
        //         return view('posts.show', compact('post'));
        //     }else{
        //         return redirect('errors.404');
            return view('posts.show', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id != null){
            return view('posts.edit', compact('id'));
        }else{
            return redirect('errors.404');
        }
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
        $post->title = $request->get('title');
        $post->slug = Str::slug($post->title);
        $post->content = $request->get('content');
        $post->visible = $request->has('visible')? 1: 0;
        $post->writer()->associate(Writer::findOrFail($request->get('writer')));
        $post->save();

        return view('posts.updated', compact('post'));

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
        // Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }
}
