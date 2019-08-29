<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$announcements = DB::table('sgx')->orderBy('releasetime', 'DESC')->take(10)->get();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($market)
    {
        return view('announcements', ["market" => $market]);
    }

    public function getData(Request $request)
    {
        $announcements = DB::table('sgx')->orderBy('releasetime', 'DESC')->take(100)->get();
        return response()->json(['success' => $request->slug, "draw" => 1, "recordsTotal" => 100, "recordsFiltered" => 100, 'data' => $announcements]);
    }

    public function sgxDetails($ID)
    {
        return view('second');
    }
}
