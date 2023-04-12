@extends('layouts.master')

@section('layout-header')
<title>Relatórios</title>
@endsection

@section('layout-content')
<div class="row mt-2">
    <span class="display-5">Relatórios</span>
</div>

<div class="row mt-5">

<div class="col-md-6 col-xl-4">
	<!-- configurar link -->
    <a href="">
    <div class="card bg-white text-black mb-3" style="cursor:pointer;">
      <div class="card-body text-center">
        <h3 class="card-title mt-3" style="font-size: 25px;">Extrato</h3>
      </div>
    </div>
    </a>
  </div>


<div class="col-md-6 col-xl-4">
	<!-- configurar link -->
    <a href="">
    <div class="card bg-white text-black mb-3" style="cursor:pointer;">
      <div class="card-body text-center">
        <h3 class="card-title mt-3"style="font-size: 25px;">Contas à Pagar</h3>
      </div>
    </div>
    </a>
  </div>



<div class="col-md-6 col-xl-4">
	<!-- configurar link -->
    <a href="">
    <div class="card bg-white text-black mb-3" style="cursor:pointer;">
      <div class="card-body text-center">
        <h3 class="card-title mt-3" style="font-size: 25px;">Contas à Receber</h3>
      </div>
    </div>
    </a>
  </div>

</div>

@endsection