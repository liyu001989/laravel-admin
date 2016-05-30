<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }
}
