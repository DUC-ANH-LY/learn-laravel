<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function testScope() {
//        with scope
        dd(User::test()->get());
//        without scope
        dd(User::where('name','like' ,'%ducanh%')->get());
    }

    public function testAttr()
    {
        dd(User::find(1)->email);
    }


}
