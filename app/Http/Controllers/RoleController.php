<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use samenta\Role;
use samenta\User;

class RoleController extends Controller
{
    public function manyTomany($id)
    {
        $user = User::find($id);
        $roles = $user->roles()->get();
        echo $user->name . ' is :::::<br>';
        foreach ($roles as $role) {
            echo $role->name . '<br>';
        }
    }
    public function manyTTomany($id)
    {
        $role = Role::find($id);
        $users = $role->users()->get();
        echo $role->name . ' for::::<br> ';
        foreach ($users as $user){
           echo $user->name  . '<br>';
           echo $user->created_at  . '<br><hr>';
        }

    }

}
