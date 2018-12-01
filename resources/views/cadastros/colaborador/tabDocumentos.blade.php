<h4>Filiação</h4>
<hr>
<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('Nome do Pai') !!}
        {!! Form::text('nome_pai',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('Nome da Mae') !!}
        {!! Form::text('nome_mae',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">

    <div class="form-group col-md-3">
        <label for="">Possui filhos menores de 14 Anos?</label>
        <div class="row">
            <div class="col-md-6">
                {!! Form::radio('menor_14','SIM') !!}
                <label for="">Sim</label>
            </div>
            <div class="col-md-6">
                {!! Form::radio('menor_14','NAO') !!}
                <label for="">Não</label>
            </div>
        </div>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('Quantos?') !!}
        {!! Form::number('qtd_filhos',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('Grau de Instrução') !!}
        {!! Form::select('escolaridade',['Analfabeto'=>'Analfabeto',
                                        'Semi-Analfabeto' => 'Semi-Analfabeto',
                                        '1 Grau' => '1º Grau',
                                        '2 Grau' => '2º Grau',
                                        'Faculdade' => 'Faculdade',
                                        'Pós Graduacao' => 'Pós Graduação(MBA)',
                                        'Mestrado' => 'Mestrado',
                                        'Doutorado' => 'Doutorado',
                                        'Pos Doutorado' => 'Pos Doutorado'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('Situação') !!}
        {!! Form::select('situacao_escolaridade',['Completo'=>'Completo',
                                                    'Incompleto' => 'Incompleto',
                                                    'Cursando' => 'Cursando'],null,['class'=>'form-control']) !!}
    </div>
</div>

<h4>Documentos</h4>
<hr>

<div class="row">
    <div class="form-group col-md-2">
        {!! Form::label('CPF ou CNPJ') !!}
        {!! Form::text('cpf_cnpj',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('Identidade') !!}
        {!! Form::text('rg',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('Data da Emissão') !!}
        {!! Form::date('rg_emissao',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('Orgão Emissor') !!}
        {!! Form::select('rg_orgaoEmissor',['SSP'=>'Secretaria de Seguança Publica(SSP)'],null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        {!! Form::label('Carteira de Trabalho') !!}
        {!! Form::text('ctps',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('Reservista') !!}
        {!! Form::text('reservista',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('Reservista') !!}
        {!! Form::text('reservista',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('Série') !!}
        {!! Form::text('serie',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('Categoria') !!}
        {!! Form::text('categoria',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        {!! Form::label('Titulo de Eleitor') !!}
        {!! Form::text('titulo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('Zona de Eleitor') !!}
        {!! Form::text('zona',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('Secção de Eleitor') !!}
        {!! Form::text('seccao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('PIS') !!}
        {!! Form::text('pis',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        {!! Form::label('CNH') !!}
        {!! Form::text('cnh',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('CNH Categoria') !!}
        {!! Form::text('cnh_categoria',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('CNH Emissão') !!}
        {!! Form::date('cnh_emissao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('CNH Vencimento') !!}
        {!! Form::date('cnh_vencimento',null,['class'=>'form-control']) !!}
    </div>
</div>



