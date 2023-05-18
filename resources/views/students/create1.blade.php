@extends('layouts.master')

@section('layout-header')
<title>Unidades</title>
@endsection

@section('layout-content')
<form method="post" action="{{route('alunos.store')}}">
@csrf

<div class="container-xxl">
  <div class="card-body">
      <h1 class="float-start">#789 - Maria José </h1>
      <button class="btn btn-light float-end text-black" style="box-shadow: none;">Salvar</button>
  </div>
</div>
<div class="content-wrapper">

  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="row">
          <div class="col-xl">
            <div class="card-body">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Nome do Aluno</label>
                 <input type="text" name="nome" id="nome" class="form-control">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">CPF</label>
                  <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Telefone 1</label>
                  <input type="tel" id="telefone1" class="form-control phone-mask" placeholder="telefone 1" name="telefone1" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Telefone 2</label>
                  <input type="tel" id="telefone2" class="form-control phone-mask" placeholder="telefone 2" name="telefone2" required>
                </div>  
            </div>
          </div>

          <div class="col-xl">
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">CEP</label>
                <input type="" class="form-control" id="cep" placeholder="CEP" name="cep" required>
              </div>
             
              <div class="mb-3">
                <label class="form-label" for="basic-default">Rua</label>
                <input type="text" id="rua" class="form-control" placeholder="Rua" name="rua" required>
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default">Número</label>
                <input type="text" id="rua" class="form-control" placeholder="Numero" name="numero" required>
              </div>


              <div class="mb-3">
                <label class="form-label" for="basic-default">Bairro</label>
                <input type="text" id="bairro" class="form-control" placeholder="Bairro" name="bairro" required>
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default">Complemento</label>
                <input type="text" id="complemento" class="form-control" placeholder="Complemento" name="complemento" required>
              </div>


              <div class="mb-3">
                <label class="form-label" for="basic-default">Cidade</label>
                <input type="text" id="cidade" class="form-control" placeholder="Cidade" name="cidade" required>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default">UF</label>
                <input type="text" id="uf" class="form-control" placeholder="UF" name="uf" required>
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-message">Observações</label>
                <textarea id="observacoes" class="form-control" placeholder="Observações" name="observacoes" required></textarea>
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