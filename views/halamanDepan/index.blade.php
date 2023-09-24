@extends('component.nav')
@section('content')
    <div class="container mt-5">
        <h1>Hello, My name is {{$name}}, I'm from {{$location}}</h1>
        <a href="{{url('profile')}}" class="btn btn-primary">My Profile</a>
        <a href="{{url('univ')}}" class="btn btn-primary">My Univerity</a>
    </div>
@endsection