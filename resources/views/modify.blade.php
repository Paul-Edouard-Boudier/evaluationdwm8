@extends('layouts.base')

@section('main')
    <div class="container-heighty">
        <div class="form-group">
            {!! Form::open(['url' => '/vehicle/'.$function]) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{{Form::label('brands', 'which brand is it from ?')}}}
                        {{{Form::select('brands', $brands, $defaultBrand, ['class' => 'form-control'])}}}
                    </div>
                    <div class="form-group col-md-6">
                        {{{Form::label('name', 'name') }}}
                        {{{Form::text('name', $name,  ['class' => 'form-control'])}}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        {{{Form::label('types', 'What sort of car is it ?')}}}
                        {{{Form::select('types', $types)}}}
                    </div>
                    <div class="form-group ">
                        {{{Form::label('doors', 'How many doors does it have ?')}}}
                        {{{Form::select('doors', [3, 5])}}}
                    </div>
                </div>
                <div class="form-group">
                    {{{Form::label('types', 'What color(s) is it ?')}}}
                    @foreach($colors as $key => $color)
                        {{{Form::checkbox('colors[]', $key)}}}
                        {{{Form::label($color, $color)}}}
                    @endforeach
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        {{{Form::label('length', 'What is the length of it (in cm) ?')}}}
                        {{{Form::number('length', $length, ['min' => 100, 'max' => 400, 'class' => 'form-control'])}}}
                    </div>
                    <div class="form-group col-md-3">
                        {{{Form::label('height', 'How high is it (in cm) ?')}}}
                        {{{Form::number('height', $height, ['min' => 40, 'max' => 150, 'class' => "form-control"])}}}
                    </div>
                    <div class="form-group col-md-3">
                        {{{Form::label('boot_capacity', "How much can it's boot carry (in L) ?")}}}
                        {{{Form::number('boot_capacity', $boot_capacity, ['min' => 10, 'max' => 600, 'class' => "form-control"])}}}
                    </div>
                </div>
                <div class="form-group">
                    {{{Form::label('stock', 'how many do you wanna ad or remove ? (currently: '.$stock.')')}}}
                    {{{Form::number('stock', null, ['min' => -50, 'max' => 50])}}}
                </div>
                @if(!empty($id))
                    {{{ Form::hidden('id', $id) }}}
                @endif
            <button type="submit" class="btn btn-secondary">Add</button>
                {{--{{{Form::submit('submit')}}}--}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection