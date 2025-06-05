<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = DB::table('users')->count();

        $visitorIP = request()->ip();
        $visitors = Cache::remember('site_visitors', now()->addHours(24), fn () => []);

        if (!in_array($visitorIP, $visitors)) {
            $visitors[] = $visitorIP;
            Cache::put('site_visitors', $visitors, now()->addHours(24));
        }

        $totalVisitors = count($visitors);

        return view('dashboard', compact('totalUsers', 'totalVisitors'));
    }
}
