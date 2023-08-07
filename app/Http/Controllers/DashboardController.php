<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.index', [
            "title" => "Dashboard Admin",
            "positionCount" => Position::count(),
            "userCount" => User::count()
        ]);
    }

    public function indexuserdashboard()
    {
        return view('dashboard.user.index', [
            "title" => 'Dashboard'
        ]);
    }
}
