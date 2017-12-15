@extends('layouts.base')

@section('title', 'Home')
@section('main')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                {{--<th scope="col">#</th>--}}
                <th scope="col">Brand</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Doors</th>
                <th scope="col">Length (in cm)</th>
                <th scope="col">Height (in cm)</th>
                <th scope="col">Boot capactiy (in L)</th>
                <th scope="col">Colors</th>
                <th scope="col">Stock</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
           @foreach($vehicles as $key => $vehicle)
               <tr>
                    {{--<td>{{$key + 1}}</td>--}}
                    <td>{{$vehicle->brand[0]->name}}</td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->type->name}}</td>
                    <td>
                        @if($vehicle->doors == 0)
                            3
                        @else
                            5
                        @endif
                    </td>
                    <td>{{$vehicle->length}}</td>
                    <td>{{$vehicle->height}}</td>
                    <td>{{$vehicle->boot_capacity}}</td>
                    <td>
                        @if(!empty($vehicle->colors[0]))
                            @foreach($vehicle->colors as $color)
                                <span>{{$color->name}}</span>
                            @endforeach
                        @else
                            <span>Undefined</span>
                        @endif
                    </td>
                   <td>{{$vehicle->stock}}</td>
                   <td>
                       <form action="/vehicle/update/{{$vehicle->id}}">
                           {{ csrf_field() }}
                           <button type="submit" class="btn btn-outline-secondary">
                               <i class="fa fa-pencil" aria-hidden="true"></i>
                           </button>
                        </form>
                   </td>
                   <td>
                       <form method="GET" action="/vehicle/delete/{{$vehicle->id}}">
                           {{ csrf_field() }}
                           <button type="submit" class="btn btn-outline-danger">
                               <i class="fa fa-trash-o" aria-hidden="true"></i>
                           </button>
                       </form>
                   </td>
               </tr>
            @endforeach
        </tbody>
        <thead>
        <tr>
            <th scope="col">Brand</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Doors</th>
            <th scope="col">Length (in cm)</th>
            <th scope="col">Height (in cm)</th>
            <th scope="col">Boot capactiy (in L)</th>
            <th scope="col">Colors</th>
            <th scope="col">Stock</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
    </table>
@endsection
