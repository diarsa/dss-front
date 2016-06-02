@extends('layout.master2')

@section('title', 'Page Materi')

@section('header')
  @parent

ini materi

  @if(count(@materis))
  <ul>
    @foreach($materis as $materi)
      <li> <a href={{url('/materi', $materi->id)}}> {{ $materi->nama}} </a> </li>
    @endforeach
  </ul>
  @endif


@endsection

@section('footer')
@endsection
