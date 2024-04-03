<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.layout.dashboard');
    }
    
    public function form() {
        return view('admin.layout.form');
    }
}
