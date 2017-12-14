@extends('layouts.base')
@section('title', 'Dashboard')
@section('main')
    <h3 class="h3-dashboard">Dashboard</h3>
    <div class="dashboard">
        <div class="brands-dashboard click">
            <p>last brands added</p>
            @foreach($brands as $brand)
                <p>{{$brand->name}}</p>
            @endforeach
            <a href="{{url('/l5b')}}"></a>
        </div>
        <div class="models-dashboard click">
            <p>last models added</p>
            @foreach($vehicles as $vehicle)
                <p>{{$vehicle->name}}</p>
            @endforeach
            <a href="{{url('/l5v')}}"></a>
        </div>
    </div>
@endsection