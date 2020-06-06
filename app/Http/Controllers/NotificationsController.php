<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    //
    public function __construct()
    {
        // Auth 要求必须登陆的人 才可以使用 控制器中的方法
        $this->middleware('auth');
    }

    public function index()
    {
        $notifications = Auth::user()->notifications()->paginate(20);
        Auth::user()->markAsRead();
        return view('notifications.index', compact('notifications'));
    }
}
