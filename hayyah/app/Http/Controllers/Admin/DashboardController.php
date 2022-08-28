<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $packages = TravelPackage::count();
        $transactions = Transaction::count();
        $pendings = Transaction::where('transaction_status', 'PENDING')->count();
        $successes = Transaction::where('transaction_status', 'SUCCESS')->count();

        return view('pages.admin.dashboard', compact('packages', 'transactions', 'pendings', 'successes'));
    }
}
