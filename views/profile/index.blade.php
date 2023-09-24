@extends('component.nav')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <p class="fs-2 fw-bold">{{$name}}</p>
            <p class="fs-2 fw-bold">Laki-Laki, {{$age}}</p>
            <p class="fs-2 fw-bold">International Woman University</p>
            <p class="fs-2 fw-bold">Informatika</p>
            <p class="fs-2 fw-bold">{{$location}}</p>
        </div>
    </div>
@endsection