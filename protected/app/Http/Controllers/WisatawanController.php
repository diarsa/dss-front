<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Wisatawan;
use App\Http\Requests;

class WisatawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       $this->middleware('guest');
     }

    public function index()
    {
      $wisatawans = Wisatawan::paginate(5);
      //$blogs = DB::table('blog')->paginate(2);
      return view('wisatawan.index', ['wisatawans' => $wisatawans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisatawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nama'   => 'required',
        'negara' => 'required',
        'jk' => 'required',
        'tujuan' => 'required',
      ]);

      $wisatawan = new Wisatawan;
      $wisatawan->nama   = $request->nama;
      $wisatawan->negara = $request->negara;
      $wisatawan->jk     = $request->jk;
      $wisatawan->tujuan = $request->tujuan;

      $wisatawan->save();
      return redirect('wisatawan')->with('message', 'Wisatawan sudah diupdate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisatawan = Wisatawa::find($id);

        if($wisatawan){
          abort(404);
        }

        return view('wisatawan.single')->with('wisatawan', $wisatawan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisatawan = Wisatawan::find($id);

        if(!$wisatawan){
          abort(404);
        }

        return view('wisatawan.edit')->with('wisatawan', $wisatawan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'nama'   => 'required',
        'negara' => 'required',
        'jk' => 'required',
        'tujuan' => 'required',
      ]);

      $wisatawan = Wisatawan::find($id);
      $wisatawan->nama   = $request->nama;
      $wisatawan->negara = $request->negara;
      $wisatawan->jk     = $request->jk;
      $wisatawan->tujuan = $request->tujuan;

      $wisatawan->save();
      return redirect('wisatawan')->with('message', 'Wisatawan sudah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
