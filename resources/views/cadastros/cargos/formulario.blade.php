@extends('crudbooster::admin_template')




@section('content')
    <div class="card">
        <div class="card-header">
            <small>campos com (**) são obrigatórios</small>
        </div>
        @if( isset($cargo) )
            {{ Form::model($cargo,['route'=> ['cargos.update',$cargo->id] ]) }}
            <input type="hidden" value="PUT" name="_method">
        @else
            {{ Form::open(['route'=>'cargos.store']) }}

        @endif
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('Nome Cargo') }}
                {!! Form::text('nome',null,['class'=>'form-control']) !!}
            </div>

            <div class="card-footer">
                {!! Form::submit(null,['class'=>'btn btn-info']) !!}
            </div>

        </div>

        {!! Form::close() !!}
    </div>
@stop
