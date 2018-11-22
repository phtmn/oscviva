@extends('layouts.matrix')

@section('breadcumb')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Lista de Doadores</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doadores</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

@stop
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('doador.create')}}" class="btn btn-info">Cadastrar Doador</a>
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
                                        <a class="dropdown-item" href="{{route('doador.edit',$d->id)}}">Editar</a>
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