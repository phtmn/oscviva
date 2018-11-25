<p>Em desenvolvimento...</p>


<div class="form-group col-6">
        {!! Form::label('nome_que_vai_exibir') !!}
        <span class="text-muted">*</span>
        {!! Form::text('nome_do_campo_no_banco',null,['class'=>'form-control','required'=>'true','placehoder'=>'texto']) !!}
</div>

<div class="form-group col-3">
        {!! Form::label('Estado civil') !!}
        {!! Form::select('estado_civil',['CAS'=>'Casado(a)',
                                         'SOL'=>'Solteiro(a)',
                                         'DIV'=>'Divorciado(a)',
                                         'FAL'=>'Falecido(a)',
                                         'N/A'=>'Não Declarado'],null,['class'=>'form-control'])
         !!}
    </div>