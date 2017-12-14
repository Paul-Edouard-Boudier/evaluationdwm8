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
                        @if(!empty($vehicle->colors[0]))
                            @foreach($vehicle->colors as $color)
                                <span>{{$color->name}}</span>
                            @endforeach
                        @else
                            <span>undefined</span>
                        @endif
                    </td>
               </tr>
            @endforeach
        </tbody>
    </table>
@endsection
