@extends('layouts.admin')
@section('content')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Frotas</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">OSCVIVA</a></li>
                <li class="breadcrumb-item active">Frotas</li>
                <li class="breadcrumb-item active">Cadastros</li>
            </ol>
        </div>       
    </div>

<div class="row">
    <div class="col-md-8 col-lg-8">
        <div class="card">
            <div class="card-body bg-info">
                                <h4 class="text-white card-title">Cadastro de Veiculo</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-7"></h6>
                                <div class="card-body">
                                <form class="form-horizontal">
<fieldset>

<!-- Select Basic -->
<div class="form-group" method="POST" action="store">
  <label class="col-md-4 control-label" for="selectbasic">Ano: </label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">1995</option>
      <option value="2">1996</option>
      <option value="3">1997</option>
      <option value="4">1998</option>
      <option value="5">1999</option>
      <option value="6">2000</option>
      <option value="7">2001</option>
      <option value="8">2002</option>
      <option value="9">2003</option>
      <option value="10">2004</option>
      <option value="11">2005</option>
      <option value="12">2006</option>
      <option value="13">2007</option>
      <option value="14">2008</option>
      <option value="15">2009</option>
      <option value="16">2010</option>
      <option value="17">2011</option>
      <option value="18">2012</option>
      <option value="19">2013</option>
      <option value="20">2014</option>
      <option value="21">2015</option>
      <option value="22">2016</option>
      <option value="23">2017</option>
      <option value="24">2018</option>
      <option value="25">2019</option>
      <option value="26">2020</option>
      <option value="27">2021</option>
      <option value="28">2022</option>
      <option value="29">2023</option>
      <option value="30">2024</option>
      <option value="31">2025</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Placa:</label>  
  <div class="col-md-4">
  <input id="placa" name="text_placa" type="text" placeholder="XXX000" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Marca:</label>  
  <div class="col-md-4">
  <input id="marca" name="text_marca" type="text" placeholder="marca do veículo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="modelo">Modelo:</label>  
  <div class="col-md-4">
  <input id="modelo" name="text_modelo" type="text" placeholder="modelo do veículo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Chassi:</label>  
  <div class="col-md-4">
  <input id="chassi" name="text_chassi" type="text" placeholder="Chassi do veículo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Renavan:</label>  
  <div class="col-md-4">
  <input id="renavan" name="text_renavan" type="text" placeholder="00000000000" class="form-control input-md">
    
  </div>
</div>

<div class="card-footer">
                {!! Form::submit(null,['class'=>'btn btn-info']) !!}
            </div>
</fieldset>
</form>

            </div>                   
            </div>
      
    </div>            
        </div>
    </div>
</div>


@endsection