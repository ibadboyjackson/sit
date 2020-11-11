<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.blog.index')->with('posts', Post::orderBy('created_at', 'DESC')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.blog.posts.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|string|max:255',
           'content' => 'required',
           'image' => 'required|image',
           'category_id' => 'required',
            'author' => 'required|string'
        ]);

        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = Str::slug($request->get('title'));
        $post->category_id = $request->get('category_id');
        $post->author = $request->get('author');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(800, 542)->save($location);
            $post->image = $filename;
        }

        $post->save();

        Session::flash('success', 'Article crée avec succès');
        return redirect()->route('posts.index');

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
        $post = Post::find($id);
        $category = $post->category;
        $categories = $category->pluck('id', 'name')->toArray();
        return view('admin.pages.blog.posts.edit', compact('post', 'categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
            'author' => 'required|string'
        ]);

        $post = Post::find($id);

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = Str::slug($request->get('title'));
        $post->category_id = $request->get('category_id');
        $post->author = $request->get('author');

        if( $request->hasFile('image')){
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(800, 542)->save($location);
            $post->image = $filename;
        }

        $post->save();

        Session::flash('success', 'Article modifié avec succès');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Post::find($id);
        $category->delete();
        Session::flash('success', 'Article supprimé avec succès');
        return redirect()->route('posts.index');
    }
}
