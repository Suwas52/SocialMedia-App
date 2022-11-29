@extends('layout.app')

@section('content')

<h1 class="text-center">Welcome to the dashboard </h1>



<form action="{{route('logout')}}" method="get">
    <div class="container">
        <button class="btn btn-danger  ">Logout</button>
    </div>
</form>

@endsection