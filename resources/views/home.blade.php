@extends('layouts.base')

@section('title', 'Home')
@section('main')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Brand</th>
                <th scope="col">Name</th>
                <th scope="col">Doors</th>
                <th scope="col">Length</th>
                <th scope="col">Height</th>
                <th scope="col">Boot capactiy</th>
                <th scope="col">Colors</th>
            </tr>
        </thead>
        <tbody>
           @foreach($vehicles as $vehicle)
               <tr>
                    <td>{{$vehicle->brand[0]->name}}</td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->doors}}</td>
                    <td>{{$vehicle->length}}</td>
                    <td>{{$vehicle->height}}</td>
                    <td>{{$vehicle->boot_capacity}}</td>
                    <td>
                        @foreach($vehicle->colors as $color)
                            @if(!empty($vehicle->colors[0]))
                                <span>{{$color->name}}</span>
                            @else
                                <span>Undefined</span>
                            @endif
                            @endforeach
                    </td>
               </tr>
            @endforeach
        </tbody>
    </table>
    {{--@foreach($vehicles as $vehicle)
        @if(!empty($vehicle->colors[0]))
            <p>{{$vehicle->colors}}</p>
        @endif
    @endforeach--}}
@endsection
