<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $packages = TravelPackage::with('galleries')->latest()->limit(4)->get();
        return view('pages.home', compact('packages'));
    }
}
