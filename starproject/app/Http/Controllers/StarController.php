<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class StarController extends Controller
{
    public function allStars()
    {
        $stars = Star::all();
            return view('stars', compact('stars'));
    }

    public function adminAllStars()
    {
        $stars = Star::all();
        return view('admin_area', compact('stars'));
    }
}
