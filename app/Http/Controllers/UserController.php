<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('authors', [
            "title" => "All Authors",
            "users" => User::All()
        ]);
    }

    public function show(User $author)
    {
        return
            view('posts', [
                'title' => 'User Post',
                'posts' => $author->post
            ]);
    }
}
