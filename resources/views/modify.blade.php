@extends('layouts.base')

@section('main')
    <div class="form-group">
        {!! Form::open(['url' => '/vehicle/'.$function]) !!}
        <div class="form-group">
            {{{Form::label('brands', 'which brand is it from ?')}}}
            {{{Form::select('brands', $brands)}}}
        </div>
        <div class="form-group">
            {{{Form::label('name', 'name') }}}
            {{{Form::text('name', $name)}}}
        </div>
        <div class="form-group">
            {{{Form::label('types', 'What sort of car is it ?')}}}
            {{{Form::select('types', $types)}}}
        </div>
        <div class="form-group">
            {{{Form::label('types', 'What color(s) is it ?')}}}
            @foreach($colors as $color)
                {{{Form::checkbox('colors', $color)}}}
                {{{Form::label($color, $color)}}}
            @endforeach
        </div>
        <div class="form-group">
            {{{Form::label('length', 'What is the length of it (in cm) ?')}}}
            {{{Form::number('length', $length, ['min' => 100, 'max' => 400, 'class' => ""])}}}
        </div>
        <div class="form-group">
            {{{Form::label('height', 'How high is it (in cm) ?')}}}
            {{{Form::number('height', $height, ['min' => 40, 'max' => 150, 'class' => ""])}}}
        </div>
        <div class="form-group">
            {{{Form::label('boot_capacity', "How much can it's boot carry (in L) ?")}}}
            {{{Form::number('boot_capacity', $boot_capacity, ['min' => 10, 'max' => 600, 'class' => ""])}}}
        </div>
        <div class="form-group">
            {{{Form::label('doors', 'How many doors does it have ?')}}}
            {{{Form::select('doors', [3, 5])}}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection