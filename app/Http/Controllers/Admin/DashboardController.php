<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function events()
    {
        return view('admin.events');
    }
    public function users()
    {
        return view('admin.users');
    }
    public function transactions()
    {
        return view('admin.transactions');
    }
    public function eventDetail()
    {
        return view('admin.events');
    }   


}
