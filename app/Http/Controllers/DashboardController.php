<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class DashboardController extends Controller
{
    public function index()
    {
        $meetings = Meeting::latest()->take(5)->get(); // ambil 5 meeting terakhir
        return view('dashboard.index', compact('meetings'));
    }

    public function __construct()
{
    $this->middleware('auth');
}

}
