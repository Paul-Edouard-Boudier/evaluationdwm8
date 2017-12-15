@extends('layouts.base')

@section('title', 'Admin Pannel')
@section('main')
    @foreach($brands as $brand)
        <div class="row container-perso">
            <?php
                $id = $brand->id;
                $stock = 0;
                $dataVehicle = Lava::DataTable();
                $dataVehicle->addStringColumn('Vehicles-'."'{$id}'")
                            ->addNumberColumn('Vehicles-'."'{$id}'");
                $name = $brand->name;
            ?>
            @foreach($brand->vehicles as $vehicle)
                <?php
                    $stockVehicle = 0;
                    $stockVehicle += intval($vehicle->stock);
                    $dataVehicle = $dataVehicle->addRow([$vehicle->name, $stockVehicle]);
                ?>
            @endforeach
            <?php
                $graph = "<div class='col-md-3 col-6' id='{$id}'></div>";
                Lava::DonutChart('Vehicles-'."'{$id}'", $dataVehicle);
                echo Lava::render('DonutChart', 'Vehicles-'."'{$id}'", strval($id));
            ?>
            <div class="col-md-3 col-6">
                <h3>{{$brand->name}} id: {{$brand->id}}</h3>
                <ul>
                    @foreach($brand->vehicles as $vehicle)
                        <?php $stock += intval($vehicle->stock) ?>
                        @if($vehicle->stock > 0)
                            <li><a href="{{url('/vehicle/update/'.$vehicle->id)}}">{{$vehicle->name}}</a>, stock: {{$vehicle->stock}}</li>
                        @endif
                    @endforeach
                </ul>
                <?php $stockTotal += $stock?>
                <p>Total: {{$stock}}</p>
            </div>
            <?= $graph ?>
        </div>
    @endforeach
    <p>Total Stock: {{$stockTotal}}</p>

@endsection