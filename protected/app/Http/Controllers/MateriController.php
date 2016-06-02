<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Materi;
class MateriController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest');
  }
  
    public function show(){
      $materis = Materi::all();

      return view('materi', compact('materis'));
    }

    public function single($id){

      $materi = Materi::find($id);

      if(!$materi){
        abort(404);
      }

      return view('single-materi', compact('materi'));


    }

}
