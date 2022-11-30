<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post::with('tagged')->get();



        dd($posts->toArray());
    }


    public function addTag(Post $post)
    {
        $tagList = ['ChulaAlu', 'CHULA105', 'วิ่ง กันนะ'];
        $post->retag($tagList);


        $tags = [];
        foreach ($post->tags as $tag) {
            $tags[] = [
                'name' => $tag->name,
                'slug' => $tag->slug
            ];
            // echo $tag->name . ' with url slug of ' . $tag->slug;
        }

        dd($post->tagged->toArray(), $tags);
    }


    public function getTag($slug)
    {
        
        $postList = Post::withAnyTag([$slug])->get();

        dd($postList->toArray());

    }
}
