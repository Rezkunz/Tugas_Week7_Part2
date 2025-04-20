<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): \Illuminate\View\View
    {
        $users = \App\Models\User::latest()->paginate(10);
        return view('user.index', compact('users'));
    }

}
