@extends('layouts.master')

@section('layout-header')
<title>Unidades</title>
@endsection


@section('layout-content')

<form method="POST" action="{{route('units.update',$unit->id)}}">  
@csrf
 <div class="container-xxl  ">
    <div class="card-body mb-3">
      <h1 class="float-start display-5">Nome da Unidade </h1>
      <button class="btn btn-light float-end text-black" style="box-shadow: none;">Salvar</button>
    </div>
</div>

<div class="content-wrapper mt-5">
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="row">

          <div class="col-xl">
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Nome da Unidade</label>
                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nome da Unidade" name="name" required value="{{$unit->name}}">
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-company">CNPJ</label>
                <input type="text" class="form-control" id="basic-default-company" placeholder="CNPJ" name="cnpj" required value="{{$unit->cnpj}}">
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-email">Responsável</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" class="form-control" placeholder="Responsável" name="responsible" value="{{$unit->responsible}}" aria-describedby="basic-default" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-message">Observações</label>
                <textarea id="basic-default-message" class="form-control" placeholder="Observações" name="observation" required>{{$unit->observation}}</textarea>
              </div>
            </div>
          </div>

          <div class="col-xl">

            <div class="card-body">

                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">CPF</label>
                  <input type="number" class="form-control" id="basic-default-fullname" placeholder="cpf" name="cpf" required  value="{{$unit->cpf}}">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Telefone 1</label>
                  <input type="tel" id="basic-default-phone" class="form-control phone-mask" placeholder="telefone 1" name="telephone1" required value="{{$unit->telephone1}}">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Telefone 1</label>
                  <input type="tel" id="basic-default-phone" class="form-control phone-mask" placeholder="telefone 2" name="telephone2" required value="{{$unit->telephone2}}">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">CEP</label>
                  <input type="" class="form-control" id="basic-default-company" placeholder="CEP" name="cep" required value="{{$unit->cep}}">
                </div>

               
                <div class="mb-3">
                  <label class="form-label" for="basic-default">Rua</label>
                  <input type="text" id="basic-default" class="form-control" placeholder="Rua" name="road" required value="{{$unit->road}}">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default">Número</label>
                  <input type="text" id="basic-default" class="form-control" placeholder="Numero" name="number" required value="{{$unit->number}}">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="basic-default">Bairro</label>
                  <input type="text" id="basic-default" class="form-control" placeholder="Bairro" name="neighborhood" required value="{{$unit->neighborhood}}">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default">Complemento</label>
                  <input type="text" id="basic-default" class="form-control" placeholder="Complemento" name="complement" required value="{{$unit->complement}}">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="basic-default">Cidade</label>
                  <input type="text" id="basic-default" class="form-control" placeholder="Cidade" name="city" required value="{{$unit->city}}">
                </div>


                <div class="mb-3">
                    <label class="form-label" for="basic-default">Estado</label>
                    <input type="text" id="basic-default" class="form-control" placeholder="Estado" name="state" required value="{{$unit->state}}">
                  </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </div>
</div>
</form>

@endsection


