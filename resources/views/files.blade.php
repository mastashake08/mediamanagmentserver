@extends('layouts.master')
@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Path</th>
        <th>URL</th>
        <th>Actions</th>

      </tr>
    </thead>
    <tbody>
      @foreach($files as $file)
      <tr>
        <td>{{$file->name}}</td>
        <td>{{$file->path}}</td>
        <td>{{$file->url}}</td>
        <td><button type="button" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-edit"></span> Edit Name
          </button>
        <button type="button" class="btn btn-success btn-sm">
            <span class="glyphicon glyphicon-send"></span> Send Media To Device(s)
          </button>
          <a href="delete-file/{{$file->id}}" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-remove"></span> Delete File
        </a>
      </td>
      </tr>
      @endforeach


    </tbody>
  </table>


@endsection
