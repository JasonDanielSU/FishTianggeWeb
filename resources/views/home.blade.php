@extends('layouts.applicationsellerlayout')

@section('content')
    

<div class="content">
    <div class="title m-b-md">
        Fish
    </div>

     <div class="links">
        <a href="{{ url('/mobileusers') }}">Users</a>
        <a href="{{ url('/mobilesellers') }}">Sellers</a>
        <a href="{{ url('/mobilecouriers') }}">Couriers</a>
        <a href="{{ url('/applicationsellers') }}">Seller Applications</a>
        <a href="{{ url('/applicationcouriers') }}">Courier Applications</a>
    </div>
</div>

@endsection
