<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserInfoController extends Controller
{
    public function userInfo()
    {
        $users = User::paginate(10);

        return Inertia::render('Dashboard', [
            'users' => $users
        ]);

    }
}
