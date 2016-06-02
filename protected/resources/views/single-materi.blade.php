@extends('layout.master2')

@section('title', 'Detail Materi')

@section('header')
  @parent

Detail Materi

  <h2> {{$materi->nama}}</h2>
  <p>
    {{$materi->desc}}
  </p>
  <p>
    {{$materi->created_at}}
  </p>


@endsection

@section('footer')
@endsection
