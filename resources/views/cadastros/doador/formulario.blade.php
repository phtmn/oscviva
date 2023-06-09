@extends('layouts.admin')

@section('breadcumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Cadastrar Doador</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('doador.index')}}">Voltar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro de Doador</li>
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
            <small>campos com (*) são obrigatórios</small>
        </div>
        @if( isset($doador) )
            {{ Form::model($doador,['route'=> ['doador.update',$doador->id] ]) }}
            <input type="hidden" value="PUT" name="_method">
        @else
            {{ Form::open(['route'=>'doador.store']) }}

        @endif
        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dadosPessoais" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Informações Gerais</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#financeiro" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Financeiro</span></a> </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="dadosPessoais" role="tabpanel">
                    <div style="margin-top: 20px">
                        @include('cadastros.doador.tabDadosPessoais')
                    </div>
                </div>
                <div class="tab-pane" id="financeiro" role="tabpanel">
                    <div style="margin-top: 20px">
                        @include('cadastros.doador.tabFinanceiro')
                    </div>
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