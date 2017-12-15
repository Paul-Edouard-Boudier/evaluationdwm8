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
        <div class="block col-md-4 col-12" id="donutchart">
            @foreach($brands as $brand)
            <?php $stock = 0?>
                @foreach($brand->vehicles as $vehicle)
                    <?php $stock += intval($vehicle->stock) ?>
                @endforeach
            <?php $stockTotal += $stock?>
            @endforeach
            <p>Number of vehicles: {{$stockTotal}}</p>
        </div>
        <div class="block col-md-4 col-12" id="barchart">
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
                ->addNumberColumn('Stocks');
        $dataVehicle  = Lava::DataTable();
        $dataVehicle->addStringColumn('Vehicles')
                    ->addNumberColumn('Vehicles')
    ?>
    @foreach($brands as $brand)
        <?php $stock = 0 ?>
            @foreach($brand->vehicles as $vehicle)
                <?php
                    $stockVehicle = 0;
                    $stock += intval($vehicle->stock);
                    /*$stockVehicle += intval($vehicle->stock);
                    $dataVehicle = $dataVehicle->addRow($vehicle->name, $stockVehicle);*/
                ?>
            @endforeach
        <?php $stocks = $stocks->addRow(["$brand->name", $stock])?>
    @endforeach
    <?php Lava::BarChart('Stocks', $stocks) ?>
    {!!\Lava::render('BarChart', 'Stocks', 'barchart') !!}



    <?php
/*    $dataVehicle  = Lava::DataTable();
    $dataVehicle->addStringColumn('Vehicles')
        ->addNumberColumn('Vehicles')
    */?>
    <?php Lava::DonutChart('Vehicles', $dataVehicle) ?>
    {{--{!!\Lava::render('DonutChart', 'Vehicles', 'donutchart') !!}--}}
@endsection