<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    function login() : View
    {
        return view('admin.auth.login');
    }

    function PasswordRequest() : View {
        return view('admin.auth.forgot-password');
    }
}
