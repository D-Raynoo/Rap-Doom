<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function show(int $id)
    {
        $user = User::select('name', 'email', 'created_at')->where('id', $id)->get();
        return Inertia::render('UserProfile/Index', ['user' => $user]);
    }
}
