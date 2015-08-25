@extends('layouts.master')
@section('content')
@foreach($stores as $store)
<p>{{$store}}</p>
@endforeach

@endsection
