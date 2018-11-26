@extends('layouts.admin')

@section('breadcumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Cadastrar Cargo</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('cargos.index')}}">Voltar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro de Cargos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@stop


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
