@extends('layout.master2')

@section('title', 'Create Blog')

@section('header')
  @parent

<br>
<form class="" action="../blog" method="post">
  <label> Title </label>
  <input class="form-control" type="text" name="title" value="" placeholder="Judul ..."><br>
  {{ ($errors->has('title')) ? $errors->first('title') : '' }}

  <label> Content </label>
  <textarea class="form-control" name="subject" rows="5" placeholder="Isi ..."></textarea><br>
  {{ ($errors->has('subject')) ? $errors->first('subject') : '' }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" class="btn btn-primary" name="name" value="Post">
</form>


@endsection

@section('footer')
@endsection
