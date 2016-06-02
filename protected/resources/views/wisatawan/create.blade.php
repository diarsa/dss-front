@extends('layout.master2')

@section('title', 'Create Wisatawan')

@section('header')
  @parent

<br>

<div class="col-lg-3" >
</div>

<form class="col-lg-6" action="../wisatawan" method="post" align="">
  <label> Nama </label>
  <input class="form-control" type="text" name="nama" value="" placeholder="Nama ..."><hr>
  {{ ($errors->has('nama')) ? $errors->first('nama') : '' }}

  <label> Negara </label>
  <input class="form-control" type="text" name="negara" value="" placeholder="Negara ... "><hr>
  {{ ($errors->has('negara')) ? $errors->first('negara') : '' }}

  <label> Jenis Kelamin </label> <br>
  <input type="radio" name="jk" value="Laki-laki" checked="checked"> Laki-laki <br>
  <input type="radio" name="jk" value="Perempuan"> Perempuan <br><hr>
  {{ ($errors->has('jk')) ? $errors->first('jk') : '' }}

  <label> Tujuan </label><br>
  <input type="radio" name="tujuan" value="Berlibur" checked="checked"> Berlibur <br>
  <input type="radio" name="tujuan" value="Penelitian"> Penelitian <br>
  <input type="radio" name="tujuan" value="Mengunjungi Kerabat"> Mengunjungi Kerabat <br>
  <input type="radio" name="tujuan" value="Yang lain"> Yang lain <br><hr>
  {{ ($errors->has('tujuan')) ? $errors->first('tujuan') : '' }}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" class="btn btn-primary" name="name" value="Post">
</form>

<div class="col-lg-3">
</div>

@endsection

@section('footer')
@endsection
