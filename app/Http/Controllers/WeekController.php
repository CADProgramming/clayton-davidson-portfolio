<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Week;

class WeekController extends Controller
{
    public function show($slug)
    {
        return view('week', [
            'week' => Week::where('slug', $slug)->firstOrFail()
        ]);
    }
}
