@extends('layouts.admin')

<!--@section('breadcumb')
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

@stop -->


@section('content')


<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Administrativo</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
            <li class="breadcrumb-item active">Administrativo</li>
            <li class="breadcrumb-item active">Imobilizado</li>
        </ol>
    </div>
</div>
    <div class="container">
        @if ($errors->any())
            <div class="container">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        
    </div>  
<div class="card">
    <div class="card-header">
       <h1> CADASTRAR </h1>
       <hr>           
   </div>
   @if( isset($imobilizado) )
   {{ Form::model($imobilizado,['route'=> ['imobilizado.update',$imobilizado->id] ]) }}
   <input type="hidden" value="PUT" name="_method">
   @else
   {{ Form::open(['route'=>'imobilizado.store']) }}

   @endif
   <div class="card-body">
    <!-- Tab panes -->
    <div class="tab-content">

        <div class="row">
            <div class="form-group col-1">                        
            </div>
            <div class="form-group col-3">
                {!! Form::label('Código') !!}
                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
            </div>

            <div class=" form-group col-7">
                {!! Form::label('Descrição') !!}
                {!! Form::text('descricao',null,['class'=>'form-control']) !!}
            </div>               

            <div class="form-group col-1">                        
            </div>
        </div>

        <div class="row">
            <div class="form-group col-1">                        
            </div>
            <div class="form-group col-4">
                {!! Form::label('Tipo') !!}
                {!! Form::select('tipo_cadastro',[
                'OP'=>'Selecione uma opção',
                'Informática'=>'Informática',
                'Móveis'=>'Móveis',                   
                'Utencílio de Cozinha'=>'Utencílio de Cozinha',   
                'Veículo'=>'Veículo',
                'Imóveis'=>'Imóveis',   
                'Obra de Arte'=>'Obra de Arte',                
                'Equipamentos'=>'Equipamentos',                
                'Máquina'=>'Máquina',                
                'N/A'=>'Não Declarado'],null,['class'=>'form-control'])
                !!}
            </div>

            <div class=" form-group col-3">
                {!! Form::label('Estado de Conservação') !!}
                {!! Form::select('estado_conservacao',[
                'OP'=>'Selecione uma opção',
                'Conservado'=>'Conservado',
                'Estragado'=>'Estragado',                
                'N/A'=>'Não Declarado'],null,['class'=>'form-control'])
                !!}
            </div>  

            <div class=" form-group col-3">
                {!! Form::label('Status') !!}
                {!! Form::select('status',[
                'OP'=>'Selecione uma opção',
                'Em uso'=>'Em uso',
                'Descardato'=>'Descardato',                
                'N/A'=>'Não Declarado'],null,['class'=>'form-control'])
                !!}
            </div>              

            <div class="form-group col-1">                        
            </div>
        </div>

        <div class="row">
            <div class="form-group col-1">                        
            </div>
            <div class="form-group col-2">
                {!! Form::label('Valor (R$)') !!}
                {!! Form::text('valor',null,['class'=>'form-control']) !!}
            </div>

            <div class=" form-group col-4">
                {!! Form::label('Data de Registro') !!}
                {!! Form::date('data_registro',null,['class'=>'form-control']) !!}
            </div>  

            <div class=" form-group col-4">
                {!! Form::label('Data da Manuntenção Preventiva') !!}
                {!! Form::date('manutencao_prevista',null,['class'=>'form-control']) !!}
            </div>              

            <div class="form-group col-1">                        
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


<script>
    $(document).ready(function(){
        $("#project_value").mask('#.##0,00', {reverse: true});
    });

</script>

@stop