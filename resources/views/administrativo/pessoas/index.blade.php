@extends('layouts.admin')

@section('content')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Colaborador</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item"><a href="#">Administrativo</a></li>
                <li class="breadcrumb-item active">Pessoas</li>
            </ol>
        </div>
        <!-- <div class="col-md-7 col-4 align-self-center">
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
                <a href="{{route('pessoas.create')}}" class="btn btn-info">Cadastrar Pessoa</a>
            </div>
                        
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Nome Completo</th>
                        <th>Email</th>
                        <th>Data Cadastro</th>
                        <th>Telefone</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->nome_completo }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->data_nascimento }}</td>
                            <td>{{ $d->created_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais opções</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="{{route('pessoas.edit',$d->id)}}">Editar</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>Não há registros</p>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection