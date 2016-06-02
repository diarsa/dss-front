@extends('layout.master2')

@section('title', 'Page Profile')

@section('header')
  @parent

ini Profil {{ $nama }}
umurnya {{ $umur }}
dan Jenis Kelamin adalahe {{ $jk }}


@endsection

@section('footer')
@endsection
