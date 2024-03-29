<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;

use Illuminate\Http\Request;

class  PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      $posts =  Post::lastest();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //


    $input = $request->all();

    if ( $file = $request->file('file')){
        $name = $file->getClientOriginalName();
        $file->move('images', $name);
        $input['path'] = $name;

    }

    Post::Create($input);




//        $this->validate($request, [
//            'title'=>'required|max:50',
//            'content'=> 'required'
//
//        ]);
//         return $request->all();
//        Post::create($request->all());
//
//        return  redirect('/posts');
////        $input = $request->all();
//        $input['title'] = $request->title;
//        Post::create($request->all());
//
//
//        $post = new Post;
//        $post->title = $request->title;
//        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrfail($id);
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
        //
        $post = Post::findOrfail($id);
        return view('posts.edit', compact('post'));
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
        $post = Post::findOrfail($id);
        $post->update($request->all());
        return  redirect('posts ');
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
        $post = Post::whereId($id)->delete();
        return redirect('/posts');

    }

    public function contact(){

        $people = ['ade', 'ayo', 'bola'];
        return view('contact', compact('people'));
    }



    public function show_post($id,$name){

        // return view('post')->with('id',$id);

        return view('post', compact('id', 'name'));

    }
}
