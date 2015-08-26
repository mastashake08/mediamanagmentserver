@extends('layouts.master')

@section('content')
<form method="POST" action="/add-store" accept-charset="UTF-8" role="form" enctype="multipart/form-data">
  <?php  echo Form::token();  ?>
<div class="form-group">
  <label for="name">Name Of Store</label>
  <input class="form-control" name="name" type="text" id="name">
  <br>
  <input class="btn btn-success" type="submit" value="Add Store!">
</div>
  </form>
@endsection
