<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Video;

class VideoController extends Controller
{
    public function manyTToManyPolymorphic($id)
    {
        $video = Video::find($id);
        $tags = $video->tags;
        echo $video->name  . "tag is :::<br>";
        foreach ($tags as $tag) {
            echo $tag->name   .   "<br>";
        }
    }
}
