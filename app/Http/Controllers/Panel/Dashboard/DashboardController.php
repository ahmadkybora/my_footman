<?php

namespace App\Http\Controllers\Panel\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('panel.dashboard.dashboard');
    }
}
