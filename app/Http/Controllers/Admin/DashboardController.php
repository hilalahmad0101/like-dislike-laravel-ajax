<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('admin.logout'));
    }

    public function user_logout()
    {
        Auth::logout();
        return redirect(route('user.logout'));
    }
}