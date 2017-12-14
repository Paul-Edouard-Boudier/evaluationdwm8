@extends('layouts.base')
@section('title', 'Dashboard')
@section('main')
    <h3 class="h3-dashboard">Dashboard</h3>
    <div class="dashboard">
        <div class="brands-dashboard">
            <p>last brands added</p>
            @foreach($brands as $brand)
                <p>{{$brand->name}}</p>
            @endforeach
        </div>
        <a href="{{url('/')}}">
            <div class="models-dashboard">
                <p>last models added</p>
                @foreach($vehicles as $vehicle)
                    <p>{{$vehicle->name}}</p>
                @endforeach
            </div>
        </a>
    </div>
@endsection