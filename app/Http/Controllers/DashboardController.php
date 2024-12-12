<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', auth()->user()->id)->whereTenantId(auth()->user()->tenant_id)->get();
        return view('dashboard', get_defined_vars());
    }
}
