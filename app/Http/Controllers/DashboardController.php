<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('page.home');
    }

    public function welcome() {
        return view('welcome');
    }
}
