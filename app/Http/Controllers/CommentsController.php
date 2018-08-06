<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Comments;
use samenta\User;

class CommentsController extends Controller
{
    public function forceDelete()
    {
        $comments = Comments::find(1);
        $comments->forceDelete();
//        return $comments;
//        return Comments::withTrashed()->find(2);
//        return Comments::onlyTrashed()->get();

    }
    public function oneTone($id)
    {
        return User::find($id)->comment;
    }
    public function oneTTone($id)
    {
        return Comments::find($id)->user;
    }
    public function oneTomany($id)
    {
        return User::find($id)->comments;
    }

}
