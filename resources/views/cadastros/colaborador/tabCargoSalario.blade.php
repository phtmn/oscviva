<div class="row">
    <div class="form-group col-4">
        {!! Form::label('Cargo') !!}
        {!! Form::select('cargo_id',$cargos,null,['class'=>'form-control','placeholder'=>'Escolha uma opção']) !!}
    </div>
    <div class="form-group col-4">
        {!! Form::label('Data de Admissão') !!}
        {!! Form::date('cargo_dtAdmissao',null,['class'=>'form-control',]) !!}
    </div>
    <div class="form-group col-4">
        {!! Form::label('Salário') !!}
        {!! Form::text('cargo_salario',null,['class'=>'form-control',]) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-3">
        {!! Form::label('Horário de Trabalho') !!}
        {!! Form::text('cargo_horTrabalho',null,['class'=>'form-control',]) !!}
    </div>
    <div class="form-group col-3">
        {!! Form::label('Vale Transporte') !!}
        {!! Form::text('cargo_valeTransporte',null,['class'=>'form-control',]) !!}
    </div>
    <div class="form-group col-3">
        {!! Form::label('Quantidade de Vale Transporte') !!}
        {!! Form::text('cargo_qtdValeTransporte',null,['class'=>'form-control',]) !!}
    </div>
    <div class="form-group col-3">
        {!! Form::label('Valor do Vale Transporte') !!}
        {!! Form::text('cargo_valorValeTransporte',null,['class'=>'form-control',]) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-3">
        {!! Form::label('Experiencia') !!}
        {!! Form::text('cargo_contratoExperiencia',null,['class'=>'form-control',]) !!}
    </div>
    <div class="form-group col-3">
        {!! Form::label('Local de Trabalho') !!}
        {!! Form::text('cargo_localTrabalho',null,['class'=>'form-control',]) !!}
    </div>
</div>