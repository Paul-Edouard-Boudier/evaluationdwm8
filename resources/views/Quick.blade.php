@extends('layouts.base')
@section('title', 'Quick View')
@section('main')
    @foreach($brands as $brand)
        <?php $stock = 0?>
        @foreach($brand->vehicles as $vehicle)
            <?php $stock += intval($vehicle->stock) ?>
        @endforeach
        <?php $stockTotal += $stock?>
    @endforeach
    <div class="row quick">
        <div class="block col-md-3 col-12 click colored grow">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="count">{{count($brands->toArray())}}</p>
                    <p>Number of different brands</p>
                    <a href="{{url('/brands')}}" class="fill-div"></a>
                </div>
                <div class="col-md-6 col-12 icon">
                    <i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="block col-md-3 col-12 click colored grow">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="count">{{count($vehicles->toArray())}}</p>
                    <p>Nb of different vehicles</p>
                    <a href="{{url('/vehicles')}}"></a>
                </div>
                <div class="col-md-6 col-12 icon">
                    <i class="fa fa-3x fa-table" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="block col-md-3 col-12 click colored grow">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="count">{{$stockTotal}}</p>
                    <p>Actual stock</p>
                    <a href="{{url('/brands')}}" class="fill-div"></a>
                </div>
                <div class="col-md-6 col-12 icon">
                    <i class="fa fa-cubes fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row quick">
        <div class="block col-md-2 col-12 click colored grow">
            <div class="row parent-fill">
                <div class="col-md-6 col-12 center">
                    <p class="center">Add a vehicle to your garage</p>
                    <a href="{{url('/create/vehicle')}}"></a>
                </div>
                <div class="col-md-6 col-12 icon">
                    <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="block col-md-8 col-12 chart grow" id="barchart">
        </div>
    </div>
    <div class="row quick">
        <div class="block col-lg-3 col-md-6 col-12 click colored grow">
            <h4>Last 5 brands</h4>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">differents cars</th>
                    <th scope="col">stock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($l5b as $brand)
                    <tr>
                        <td>{{$brand->name}}</td>
                        <?php
                            $stock = 0;
                            $count = 0;
                        ?>
                        @foreach($brand->vehicles as $vehicle)
                            <?php
                                $stock += intval($vehicle->stock);
                                $count += 1;
                            ?>
                        @endforeach
                        <td>{{$count}}</td>
                        <td>{{$stock}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{url('/l5b')}}"></a>
        </div>
        <div class="block col-lg-3 col-md-6 col-12 click colored grow">
            <h4>LAST 5 MODELS</h4>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">brand</th>
                    <th scope="col">type</th>
                    <th scope="col">stock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($l5v as $vehicle)
                    <tr>
                        <td>{{$vehicle->name}}</td>
                        <td>{{$vehicle->brand[0]->name}}</td>
                        <td>{{$vehicle->type->name}}</td>
                        <td>{{$vehicle->stock}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{url('/l5v')}}"></a>
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
                ?>
            @endforeach
        <?php $stocks = $stocks->addRow(["$brand->name", $stock])?>
    @endforeach
    <?php Lava::BarChart('Stocks', $stocks) ?>
    {!!\Lava::render('BarChart', 'Stocks', 'barchart') !!}

    @foreach($firstBrand->vehicles as $vehicle)
        <?php
            $stockVehicle = 0;
            $stockVehicle += intval($vehicle->stock);
            $dataVehicle = $dataVehicle->addRow([$vehicle->name, $stockVehicle]);
        ?>
    @endforeach
    <?php Lava::DonutChart('Vehicles', $dataVehicle) ?>
    {{--{!!\Lava::render('DonutChart', 'Vehicles', 'donutchart') !!}--}}
@endsection