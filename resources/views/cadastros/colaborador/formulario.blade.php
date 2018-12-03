@extends('crudbooster::admin_template')    


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
          Adicionar Colaborador
          </div>
        <form method='post' action='{{route('colaborador.store')}}'>
        {{csrf_field()}}
        <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dadosPessoais" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Informações Gerais</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#documentos" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Documentos</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cargosSalarios" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Cargo/Salario</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="dadosPessoais" role="tabpanel">
                    
                        @include('cadastros.colaborador.tabDadosPessoais')
                    
                </div>
                <div class="tab-pane" id="documentos" role="tabpanel">
                    
                        @include('cadastros.colaborador.tabDocumentos')
                    
                </div>
                <div class="tab-pane p-20" id="cargosSalarios" role="tabpanel">
                   
                        @include('cadastros.colaborador.tabCargoSalario')
                    
                </div>
            </div>
            <div class="panel-footer">
                <input type='submit' class='btn btn-primary' value='Save changes'/>
            </div>

        </div>

       </form>
    </div>


@endsection
