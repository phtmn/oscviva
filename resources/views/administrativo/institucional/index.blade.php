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
               
        
        </div>
    </div>
</div>


@endsection