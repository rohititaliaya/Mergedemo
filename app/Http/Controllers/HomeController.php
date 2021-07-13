<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataTables\UserDataTable;
session(['pagelength' => 30]);
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(UserDataTable $dataTable)
    {

        return $dataTable->render('home');
    }

    public function getenv(Request $request)
    {   
        session(['pagelength'=>10]);
        $x = $request->id;
        // $x = session('pagelength');
        // return $x;
        return view('home');    
    }

    
}
