@extends('layouts.base')

@section('title', 'test')
@section('main')
    @foreach($brands as $brand)
        <?php $stock = 0?>
        <h3>{{$brand->name}}</h3>
        <ul>
            @foreach($brand->vehicles as $vehicle)
                <?php $stock += intval($vehicle->stock) ?>
                    <li><a href="{{url('/update/'.$vehicle->id)}}">{{$vehicle->name}}</a>, stock: {{$vehicle->stock}}</li>
            @endforeach
        </ul>
        <?php $stockTotal += $stock?>
        <p>Total: {{$stock}}</p>
    @endforeach
    <p>Total Stock: {{$stockTotal}}</p>
@endsection