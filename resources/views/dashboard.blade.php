@extends('layout.app')

@section('content')

<h1>Welcome to the dashboard </h1>



<form action="{{route('logout')}}" method="get">
    <button class="btn btn-danger">Logout</button>
</form>

@endsection