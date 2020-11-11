<?php

namespace App\Http\Controllers\Pages;

use App\Model\Category;
use App\Model\Post;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index () {

        return view('pages.blog', [
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(6)
        ]);
    }

    public function single ( $slug) {

        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();

        if( $post) {

            return view('pages.single', [

                'categories' => $categories,
                'posts' => Post::orderBy('created_at', 'DESC')->paginate(3)

            ])->with('post', $post);

        }

        return abort(404);
    }
}
