<?php

namespace toc\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     * home original do laravel
     */

     /*
    public function index()
    {
        return view('home');
    }
    */


        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         * home que eu fiz
         */
        public function index()
        {
            return view('toc');
        }
}
