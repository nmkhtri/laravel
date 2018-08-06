<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Tag;

class TagController extends Controller
{
    public function manyTTToManyPolymorphic($id)
    {
        $tag = Tag::find($id);
        $posts = $tag->posts;
        echo $tag->name  .  "  posts is <br>";
        foreach($posts as $post)
        {
            echo $post->title;
        }
    }
    public function retriveVtT($id)
    {
        $tag = Tag::find($id);
        $videos = $tag->videos;
//        $videos = $tag->videos()->detach();
//        echo $videos;
//        echo $tag->name . "<br>";
//        foreach ($videos as $video)
//        {
//            echo $video->name;
//        }

    }
}
