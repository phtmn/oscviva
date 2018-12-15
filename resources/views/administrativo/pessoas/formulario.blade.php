@extends('layouts.admin')

@section('breadcumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Cadastrar Pessoas</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('pessoas.index')}}">Voltar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro de Pessoas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@stop


@section('content')


<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Administrativo</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item active">Administrativo</li>
                <li class="breadcrumb-item active">Gestão de Pessoas</li>
            </ol>
        </div>
 </div>

    <div class="card">
        <div class="card-header">
            <small>campos com (**) são obrigatórios</small>
        </div>
        @if( isset($pessoa) )
            {{ Form::model($pessoa,['route'=> ['pessoas.update',$pessoa->id] ]) }}
            <input type="hidden" value="PUT" name="_method">
        @else
            {{ Form::open(['route'=>'pessoas.store']) }}

        @endif
        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dadosPessoais" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Informações Gerais</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#documentos" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Documentos</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cargosSalarios" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Cargo/Salario</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="dadosPessoais" role="tabpanel">
                    <div style="margin-top: 20px">
                        @include('administrativo.pessoas.tabDadosPessoais')
                    </div>
                </div>
                <div class="tab-pane" id="documentos" role="tabpanel">
                    <div style="margin-top: 20px">
                        @include('administrativo.pessoas.tabDocumentos')
                    </div>
                </div>
                <div class="tab-pane p-20" id="cargosSalarios" role="tabpanel">
                    <div style="margin-top: 20px">
                        @include('administrativo.pessoas.tabCargoSalario')
                    </div>
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit(null,['class'=>'btn btn-info']) !!}
            </div>

        </div>

        {!! Form::close() !!}
    </div>


@stop
@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script src="{{asset('js/viaCep.js')}}"> </script>

    <script>
        $(document).ready(function(){
            $("#project_value").mask('#.##0,00', {reverse: true});
            $("#phone_number").mask('(00)00000-0000');
            $("#phone_number2").mask('(00)00000-0000');
        });

    </script>

@stop