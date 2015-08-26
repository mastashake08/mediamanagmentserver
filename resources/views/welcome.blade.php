@extends('layouts.master')
@section('content')
<form  method="POST" action="/add-file" accept-charset="UTF-8" role="form" enctype="multipart/form-data">
  <?php  echo Form::token();  ?>
<div class="form-group">
  <label for="name">Name Of File</label>
  <input class="form-control" name="name" type="text" id="name">
  <br>
  <input  name="media" type="file">
  <br>
  <button type="submit" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-cloud-upload"></span> Upload File
        </button>
</div>
  </form>
@endsection
