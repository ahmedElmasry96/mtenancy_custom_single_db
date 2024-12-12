<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::userTeam()->get();
        return view('dashboard', get_defined_vars());
    }
}
