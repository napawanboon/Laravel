
@extends('layout.main')
@section('page_title', 'Test Hello')
@section('content')
<p>Hello World {{ $name }} {{ $lastname }} </p>
    <a href="{{ url('/test') }}">Go To Test page</a>
    <img src="{{ url('images/1.png') }}" alt="Girl in a jacket" width="500" height="600">
@stop 
