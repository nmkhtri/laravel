<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
         $this->middleware('isAdmin');
    }
    public function index()
    {
        return'you are admin @index';
    }
}
