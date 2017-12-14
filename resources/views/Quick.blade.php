@extends('layouts.base')
@section('title', 'Quick View')
@section('main')
    <div class="row quick">
        <div class="block col-md-3 col-12 click">
            <p>Nb of different brands: {{count($brands->toArray())}}</p>
            <a href="{{url('/brands')}}" class="fill-div"></a>
        </div>
        <div class="block col-md-3 col-12 click">
            <p>Nb of different vehicles: {{count($vehicles->toArray())}}</p>
            <a href="{{url('/vehicles')}}"></a>
        </div>
    </div>
    <div class="row quick">
        <div class="block col-md-3 col-12">
            @foreach($brands as $brand)
            <?php $stock = 0?>
                @foreach($brand->vehicles as $vehicle)
                    <?php $stock += intval($vehicle->stock) ?>
                @endforeach
            <?php $stockTotal += $stock?>
            @endforeach
            <p>Number of vehicles: {{$stockTotal}}</p>
        </div>
        <div class="block col-md-3 col-12">
            <p> ? </p>
        </div>
    </div>
    <div class="row quick">
        <div class="block col-md-3 col-12 click">
            <p>Add a brand to your garage</p>
            <a href="{{url('/create/brand')}}"></a>
        </div>
        <div class="block col-md-3 col-12 click">
            <p>Add a vehicle to your garage</p>
            <a href="{{url('/create/vehicle')}}"></a>
        </div>
    </div>
@endsection