<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(10);
        $all_users = User::get();
        return view('home', compact('users', 'all_users'));
    }

    public function test_hello($name, $age){
        // echo $name;
        // echo $age;
        return view('test_hello', compact('name', 'age'));
    }
}
