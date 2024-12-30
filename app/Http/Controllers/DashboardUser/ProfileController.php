<?php

namespace App\Http\Controllers\DashboardUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($name)
    {
        $user = User::where('name', $name)->firstOrFail();

        return view('dashboard-user.profile.index', compact('user'));
    }
}
