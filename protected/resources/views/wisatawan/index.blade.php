{{ Session::get('message') }}

@extends('layout.master2')

@section('title', 'Page Wisatawan List')

@section('header')
  @parent

<form class="" action="{{url('/wisatawan/create')}}">
  <input type="hidden" name="_method" value="create">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" class="btn btn-primary" value="Create">
</form>

<hr>

<div class="table-responsive">
  <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th width="15%"> Created </th>
        <th width="20%"> Nama </th>
        <th width="20%"> Negara </th>
        <th width="20%"> JK </th>
        <th width="50%"> Tujuan </th>

      </tr>
    </thead>
    <tbody>
      @foreach($wisatawans as $wisatawan)
      <tr>
        <td>{{{ date('d F Y' , strtotime($wisatawan->created_at) )}}}</td>
        <td>{{{ $wisatawan->nama }}}</td>
        <td>{{{ $wisatawan->negara }}}</td>
        <td>{{{ $wisatawan->jk }}}</td>
        <td>{{{ $wisatawan->tujuan }}}</td>
        <td><form class="" action="{{url('/wisatawan', $wisatawan->id)}}" method="get">
            <input type="hidden" name="_method" value="detail">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-info" name="name" value="Detail">
        </form></td>
        <td><form class="" action="{{url('/wisatawan', $wisatawan->id)}}/edit" method="get">
          <input type="hidden" name="_method" value="edit">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-warning" name="name" value="Edit">
        </form></td>
        <td><form class="" action="{{url('/blog', $wisatawan->id)}}" method="post">
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-danger" name="name" value="Delete">
        </form></td>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>





{!! $wisatawans->links() !!}

@endsection

@section('footer')
@endsection
