<?php

namespace App\Http\Controllers;

use App\Models\apirequest;

class HomeController extends Controller
{
    public function index()
    {
        $requests = apirequest::query()
            ->select('id', 'name', 'description', 'request', 'request_type')
            ->orderBy('id')
            ->get();

        return view('welcome', compact('requests'));
    }
}
