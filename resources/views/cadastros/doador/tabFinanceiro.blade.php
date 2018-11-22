<div class="row">
    <div class="form-group col-3">
        {!! Form::label('Periodo de Contribuição') !!}
        {!! Form::select('periodicidade',['30'=>'Mensalmente',
                                         '15'=>'Quinzenalmente',
                                         '7'=>'Semanalmente',
                                         'E'=>'Esporádicamente',
                                         'A' => 'Anualmente'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-3">
        {!! Form::label('Situação do Cadastro') !!}
        {!! Form::select('situacao',['I'=>'Inativo(a)','A'=>'Ativo(a)','G'=>'Geladeira','D'=>'Dados Desatualizados'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-2">
        {!! Form::label('Dia Pagamento') !!}
        {!! Form::number('dia_pgto',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-4">
        {!! Form::label('Mensageiro Responsável') !!}
        <span class="required">**</span>
        {!! Form::select('mensageiro_id',$mensageiros,null,['class'=>'form-control','placeholder'=>'Selecione']) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-4">
        {!! Form::label('Observações Financeiras') !!}
        {!! Form::textarea('obs_financeiras',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-4">
        {!! Form::label('Observações Pessoais') !!}
        {!! Form::textarea('obs_pessoais',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-4">
        {!! Form::label('Observações Gerais') !!}
        {!! Form::textarea('obs_gerais',null,['class'=>'form-control']) !!}
    </div>
</div>

