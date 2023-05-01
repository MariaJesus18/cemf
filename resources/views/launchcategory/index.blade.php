@extends('layouts.master')


@section('layout-header')
<title>Categorias de Lançamento</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="index.html" method="POST">
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Categorias de Lançamento</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 mb-3">
            <div class="col">
                <a href="{{route('lcategories.create')}}" name="download" id="download" class="btn float-end btn-primary" style="color:white; margin-right:1rem; font-size:13px;">Adicionar Categoria</a>
            </div>
        </div>



    {{-- <div class="w-100 h-100 bg-white"> --}}
        {{-- <div class="container "> --}}

        <div class="row ">
            <div class="col-8">
                <form action="" class="form-group ">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" class="form-control" placeholder="Buscar categoria..." aria-describedby="button-addon1">
                      </div>
                </form>
            </div>
        </div>
    {{-- </div> --}}
        
        <div class="table-responsive m-3">
            <table class="table">
                <thead>
                    {{-- <tr> --}}
                        <th scope="col">Id</th>
                        <th scope="col">Título</th>
                        <th scope="col">Tipo de Categoria</th>
                    {{-- </tr> --}}
                </thead>
                <tbody>
                    @forelse ($launchCategories as $launchCategory )
                        <tr class="">
                            <td scope="row">{{$launchCategory->id}}</td>
                            <td scope="row">{{$launchCategory->title}}</td>
                            <td scope="row">{{$launchCategory->categoryType}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-white" style="border:none;" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{route('lcategories.show',['lcategory'=>$launchCategory->id])}}">Visualizar</a>
                                        {{-- <a class="dropdown-item" href="#">Visualizar</a> --}}
                                    </div>
                                </div>                                
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- </div> --}}
    </div>
</form>

@endsection