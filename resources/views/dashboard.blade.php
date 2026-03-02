{{-- @dd($title) --}}
@extends('layouts.main')

@section('content')
    <p>Welcome to the Dashboard {{ Auth::user()->name }}</p>
@endsection