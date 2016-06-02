<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfilController extends Controller {

  public function __construct()
  {
    $this->middleware('guest');
  }

  public function index(){

    $nama = "Bayu";
    $umur = 21;
    $jk = "Laki-laki";

    return view('profil', compact('nama', 'umur','jk'));
  }

  public function materi(){

      $datas = ['html', 'css', 'js'];

    return view('materi')->with('datas', $datas);
  }

}
