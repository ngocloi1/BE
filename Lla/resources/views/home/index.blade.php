@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only</p>
            <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button"> &raquo;</a>
        @endauth

        @guest
            <h1>Home</h1>
            <p class="lead">You</p>
        @endguest
    </div>
@endsection
