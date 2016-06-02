{{ Session::get('message') }}

@extends('layout.master2')

@section('title', 'Page Blog List')

@section('header')
  @parent

<form class="" action="{{url('/blog/create')}}">
  <input type="hidden" name="_method" value="create">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" class="btn btn-primary" value="Create">
</form>

<hr>

<div class="table-responsive">
  <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th width="10%"> Created at </th>
        <th width="20%"> Title </th>
        <th width="50%"> Subject </th>

      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $blog)
      <tr>
        <td>{{{ date('d F Y' , strtotime($blog->created_at) )}}}</td>
        <td>{{{ $blog->title }}}</td>
        <td>{{{ $blog->subject }}}</td>
        <td><form class="" action="{{url('/blog', $blog->slug)}}" method="get">
            <input type="hidden" name="_method" value="detail">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-info" name="name" value="Detail">
        </form></td>
        <td><form class="" action="{{url('/blog', $blog->id)}}/edit" method="get">
          <input type="hidden" name="_method" value="edit">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-warning" name="name" value="Edit">
        </form></td>
        <td><form class="" action="{{url('/blog', $blog->id)}}" method="post">
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-danger" name="name" value="Delete">
        </form></td>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>





{!! $blogs->links() !!}

@endsection

@section('footer')
@endsection
