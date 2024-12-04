<?php

namespace App\Http\Controllers\DashboardUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('dashboard-user.index');
    }
}
