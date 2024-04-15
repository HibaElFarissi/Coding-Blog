<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function index()
    {

        return view('blog.index')->with('posts',Post::orderBy('updated_at', 'DESC')->get());
         // ghatjib liya ga3 posts lif db
    }



    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            "title"=>'required|string|max:100',
            "description"=>"required|string",
            "image"=> "required|max:5028|mimes:jpg,png,jpeg,svg",
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' .
        $request->file('image')->extension();

        $request->image->move(public_path('Blogs-img'), $newImageName);

        Post::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug'=> SlugService::createSlug(Post::class, 'slug',
            $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')->with('message', 'Your post has been added successfully!');


    }



    public function show($slug)
    {
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }


    public function edit($slug)
    {
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());
    }


    public function update(Request $request, $slug)
    {
        $request->validate([
            "title"=>'required|string|max:100',
            "description"=>"required|string",

        ]);

        Post::where('slug',$slug)->update([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug'=> SlugService::createSlug(Post::class, 'slug',
            $request->title),
            // 'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')->with('message', 'Your post has been Updated successfully!');
    }


    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();
        return redirect('/blog')->with('delete-post', 'Your post has been Deleted successfully!');
    }
}
