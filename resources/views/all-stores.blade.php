@extends('layouts.master')
@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>IP Address</th>
        <th>Websocket Channel Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($stores as $store)
      <tr>
        <td>{{$store->name}}</td>
        <td>{{$store->ip_address}}</td>
        <td>{{$store->websocket_channel}}</td>
        <td><button type="button" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-edit"></span> Edit Name
          </button>
        <button type="button" class="btn btn-success btn-sm">
            <span class="glyphicon glyphicon-send"></span> Send Media To This Device
          </button>
          <a href="delete-store/{{$store->id}}" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-remove"></span> Delete Store
        </a>
      </td>
      </tr>
      @endforeach


    </tbody>
  </table>

@endsection
