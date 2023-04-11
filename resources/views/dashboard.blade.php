@extends('layouts.master')

@section('layout-header')
<title>Dashboard</title>
@endsection



@section('layout-content')

<div class="row d-flex justify-content-between">
  <div class="col-4">
    <span class="display-5">Dashboard</span>
  </div>

  <div class="col-4">
    <select class="form-select" name="" style="border-radius:15px;">
      <option value="">Últimos 30 dias</option>
    </select>
  </div>
</div>


<div class="row mt-5">

  <div class="col-md-6 col-xl-4">
    <div class="card bg-white text-black mb-3">
      <div class="card-header">Receitas</div>
      <div class="card-body">
        <h5 class="card-title">R$ 8.950,00</h5>
        <p class="card-text">Some quick example text to build on the card title and make up.</p>
      </div>
    </div>
  </div>


<div class="col-md-6 col-xl-4">
    <div class="card bg-white text-black mb-3">
      <div class="card-header">Alunos</div>
      <div class="card-body">
        <h5 class="card-title">125</h5>
        <p class="card-text">Some quick example text to build on the card title and make up.</p>
      </div>
    </div>
  </div>


<div class="col-md-6 col-xl-4">
    <div class="card bg-white text-black mb-3">
      <div class="card-header">À Pagar</div>
      <div class="card-body">
        <h5 class="card-title">R$ 5.347,00</h5>
        <p class="card-text">Some quick example text to build on the card title and make up.</p>
      </div>
    </div>
  </div>

</div>

@endsection