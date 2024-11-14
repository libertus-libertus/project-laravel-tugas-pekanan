<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function welcome() {
        return view('welcome');
    }

    public function table() {
        return view('pages.table.table');
    }

    public function data_table() {
        return view('pages.table.data-table');
    }

    public function contact() {
        return view('pages.contact.contact');
    }
}
