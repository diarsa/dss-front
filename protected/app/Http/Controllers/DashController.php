<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Blog;
use App\Http\Requests;

class DashController extends Controller
{


  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest');
      //$this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('dashboard');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard');
    }


      public function berita()
      {
        return view('berita');
      }

      public function child()
      {
        return view('child');
      }

      public function profile()
      {
        return view('profile');
      }

}
