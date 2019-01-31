@extends('layouts.songs')
@section('content')

  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  SongsDB
              </h1>
              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="{{ url('/home')}}">Dashboard</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-table"></i> Songs Lyrics
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
    @endif

      <div class="row">
          <div class="col-lg-12">
              <h2>Songs Lyrics</h2>
              <div class="table-responsive">
                  <table class="table table-hover table-striped">
                      <thead>
                          <tr>
                              <th>Title</th>
                              <th>Artist</th>
                              <th>Lyrics</th>
                              <th>
                                  <a href="{{route('songs.create')}}" class="btn btn-success btn-sm">
                                      <i class="fa fa-plus"></i>
                                  </a>
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach( $song as $key => $value)
                            <tr>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->artist }}</td>
                                <td>{{ $value->body }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('songs.show', $value->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn btn-primary btn-sm" href="{{route('songs.edit', $value->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    {{ Form::open(['method' => 'DELETE','route' => ['songs.destroy', $value->id],'style'=>'display:inline']) }}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
            {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <!-- /.row -->
    {{$song->links()}}
  </div>
  <!-- /.container-fluid -->

@endsection