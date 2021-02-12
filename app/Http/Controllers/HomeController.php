<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller

{

    /**
     * create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard
     * 
     * @return Illuminate\Contracts\Support\Renderable 
     */
    public function index()

    {

        return view ('index',['restaurant'=>DB::table( 'restaurants' )->get()]);

    }
}
