<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Cache;


use App\Http\Requests\PostRequest;
class PostController extends Controller
{    
    public function index()
    {
        if (request()->page) {
            $key = 'posts'. request()->page;
        } else {
            $key = 'posts';
        }

        if (Cache::has($key)) {
            $posts = Cache::get($key);
        } else {
            $posts = Post::where('estado', 2)->latest('id')->paginate(8);
            Cache::put($key, $posts);
        }

        $posts = Post::where('estado', 2)->latest('id')->paginate(8);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Post $post)
    {
        /* $this->authorize('published', $post); */

        $similares = Post::where('category_id', $post->category_id)
                            ->where('estado', 2)
                            ->where('id', '!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();

        return view('posts.show', compact('post', 'similares'));
    }

    
    public function category(Category $category)
    {
        $posts = Post::where('category_id', $category->id)
                        ->where('estado', 2)
                        /* ->where('id', '!=', $category->id) */
                        ->latest('id')
                        ->paginate(4);
                        /* ->get(); */

            return view('posts.category', compact('posts', 'category'));
    }

   
    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->where('estado', 2)->latest('id')->paginate(4);

        return view('posts.tag', compact('posts', 'tag'));
    }

    
    public function destroy($id)
    {
        //
    }
}
