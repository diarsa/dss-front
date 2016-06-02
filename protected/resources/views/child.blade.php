@extends('layout.master2')

@section('title', 'Page Child')

@section('header')
  @parent

  <p> This is my body content </p>

@endsection

@section('footer')
@endsection
