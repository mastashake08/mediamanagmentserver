@extends('layouts.master')
@section('content')
@foreach($files as $file)
<p>{{$file}}</p>
@endforeach

@endsection
