@extends('layouts.admin')

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
   <!--      <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>CANCELADOS</small></h6>
                        <h4 class="m-t-0 text-info">{{ $data->where('canceled',1)->count()}}</h4>
                    </div>
                </div>

                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>TOTAL DE PATROCINIOS</small></h6>
                        <h4 class="m-t-0 text-info">$ {{ number_format($data->where('sponsor_type','=','PA')->sum('amount'),2,',','.')}}</h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>TOTAL DE DOAÇOES</small></h6>
                        <h4 class="m-t-0 text-primary">$ {{ number_format($data->where('sponsor_type','=','DD')->sum('amount'),2,',','.')}}</h4>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('imobilizado.create')}}" class="btn btn-info">Cadastrar</a>
            </div>
                        
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Valor</th>                        
                    </thead>
                    <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{$d->codigo}}</td>
                            <td>{{$d->descricao}}</td>
                            <td>{{$d->tipo_cadastro}}</td>
                            <td>{{$d->estado_conservacao}}</td>
                            <td>{{$d->valor}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais opções</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="{{route('imobilizado.edit',$d->id)}}">Editar</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <label class="label label-danger">Ainda não há registros!</label>
                                <hr>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection