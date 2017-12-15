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
        <div class="block col-md-3 col-12" id="graph">
            <p> ?</p>
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
    <?php
        $stocks  = Lava::DataTable();
        $stocks->addStringColumn('Stocks')
            ->addNumberColumn('Stocks')
            ->addRow(['Tacos',  rand(1000,5000)])
            ->addRow(['Salad',  rand(1000,5000)])
            ->addRow(['Pizza',  rand(1000,5000)])
            ->addRow(['Apples', rand(1000,5000)])
            ->addRow(['Fish',   rand(1000,5000)]);

        Lava::BarChart('Stocks', $stocks);
    ?>
    {{--{!! \Lava::render('LineChart', 'test', 'graph') !!}--}}
    {!!\Lava::render('BarChart', 'Stocks', 'graph') !!}
@endsection