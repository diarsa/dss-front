<?php namespace App\Http\Controllers;

/**
 *
 */
class WelcomeController extends controller {

/**
 * @return void
 */

public function __construct()
{
  $this->middleware('guest');
}

/**
 * @return Responese
 */

  public function index()
  {
    return view('dashboard');
  }

}



 ?>
