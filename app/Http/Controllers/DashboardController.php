<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Usernotnull\Toast\Concerns\WireToast;

class DashboardController extends Controller
{
    public function index()
    {
        $quotes = Quote::where('user_id', auth()->user()->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        
        return view('dashboard', compact('quotes'));
    }

    public function admin()
    {
        $isAdmin = auth()->user()->admin;

        if(!$isAdmin) {
            toast()
                ->warning('You are not admin!', 'Permission Restricted', 5000)
                ->pushOnNextPage();

            return back();
        }

        $users = User::where('admin', false)
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        
        return view('admin-dashboard', compact('users'));
    }

    public function banned()
    {
        $isBanned = auth()->user()->banned;

        if(!$isBanned) {
            toast()
                ->warning('You are not banned!', 'Permission Restricted', 5000)
                ->pushOnNextPage();

            return redirect()->route('dashboard');
        }
        return view('banned');
    }
}
