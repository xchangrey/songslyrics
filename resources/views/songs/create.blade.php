@extends('layouts.songs')
@section('content')
<div class="row">
  <div class="col-md-6 col-offset-3">
    {!! Form::open(['route'=>'songs.store', 'method'=>'POST']) !!}
      @include('songs.form_master')
    {!! Form::close() !!}
  </div>
</div>


@endsection