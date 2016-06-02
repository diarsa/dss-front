@extends('layout.master2')

@section('title', 'Page Single')

@section('header')
  @parent

<div class="page-header">
  <h3><b>
    {{ $blog->title }}
  </b></h3>
  {{ date('d F Y' , strtotime($blog->created_at) )}}
</div>

<div class="well">
      <p>
        {{ $blog->subject }}
      </p>
</div>

@endsection

@section('footer')
@endsection
