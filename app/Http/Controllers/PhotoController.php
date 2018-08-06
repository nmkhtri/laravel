<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Photo;
use samenta\User;

class PhotoController extends Controller
{
    public function polymorphic($id)
    {
        $user = User::find($id);
        $photos = $user->photos;
        foreach ($photos as $photo)
        {
            echo $photo->path . '<br>';
        }

    }
    public function polymorphicInverse($id)
    {
        $photo = Photo::find($id);
        $imageble = $photo->imageble;
        return $imageble;
    }
}
