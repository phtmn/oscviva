<h4>Dados Pessoais</h4>
<hr>

<div class="row">
    <div class="form-group col-6">
        {!! Form::label('Nome Completo') !!}
        <span class="text-muted">*</span>
        {!! Form::text('nome_completo',null,['class'=>'form-control']) !!}
    </div>

    <div class=" form-group col-4">
        {!! Form::label('Data de Nascimento') !!}
        {!! Form::date('data_nascimento',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-2 ">
        {!! Form::label('Sexo') !!}
        {!! Form::select('sexo',['M'=>'Masculino','F'=>'Feminino'],null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-3">
        {!! Form::label('Estado civil') !!}
        {!! Form::select('estado_civil',['CAS'=>'Casado(a)',
                                         'SOL'=>'Solteiro(a)',
                                         'DIV'=>'Divorciado(a)',
                                         'FAL'=>'Falecido(a)',
                                         'N/A'=>'Não Declarado'],null,['class'=>'form-control'])
         !!}
    </div>

    <div class="form-group col-3">
        {!! Form::label('Tratamento') !!}
        {!! Form::select('tratamento',['Senhor'=>'Senhor',
                                       'Senhora'=> 'Senhora',
                                       'Senhorita'=>'Senhorita',
                                       'Excelentissimo Sr'=>'Excelentissimo Sr',
                                       'Doutor'=>'Doutor',
                                       'Pelo nome' => 'Pelo Nome'],null,['class'=>'form-control'])
        !!}
    </div>

    <div class="form-group col-6">
        {!! Form::label('E-mail') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
</div>

<h4>Endereço e Localização</h4>
<hr>
<div class="row">
    <div class="form-group col-2">
        {!! Form::label('cep') !!}
        {!! Form::text('cep',null,['class'=>'form-control','id'=>'cep']) !!}
    </div>

    <div class="form-group col-6">
        {!! Form::label('Rua/Logradouro') !!}
        {!! Form::text('logradouro',null,['class'=>'form-control','id'=>'rua']) !!}
    </div>

    <div class="form-group col-1">
        {!! Form::label('N°') !!}
        {!! Form::text('numero',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-3">
        {!! Form::label('Cidade') !!}
        {!! Form::text('cidade',null,['class'=>'form-control','id'=>'cidade']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        {!! Form::label('bairro') !!}
        {!! Form::text('bairro',null,['class'=>'form-control','id'=>'bairro']) !!}
    </div>

    <div class="form-group col-2">
        {!! Form::label('Estado') !!}
        {!! Form::text('uf',null,['class'=>'form-control','id'=>'uf']) !!}
    </div>

    <div class="form-group col-6">
        {!! Form::label('Complemento') !!}
        {!! Form::text('complemento',null,['class'=>'form-control']) !!}
    </div>
</div>