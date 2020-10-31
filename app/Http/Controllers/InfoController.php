<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.npoint.io/99c279bb173a6e28359c/data');
        $data = $response->json();
        // dd($data);
        return view('index', compact('data'));
    }
}
