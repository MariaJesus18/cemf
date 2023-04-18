@extends('layouts.master')


@section('layout-header')
<title>Convênios</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="index.html" method="POST">
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Convênios</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 mb-3">
            <div class="col">
                <a href="{{route('covenants.create')}}" name="download" id="download" class="btn float-end btn-primary" style="color:white; margin-right:1rem; font-size:13px;">Adicionar Convênio</a>
            </div>
        </div>



    {{-- <div class="w-100 h-100 bg-white"> --}}
        {{-- <div class="container "> --}}

        <div class="row ">
            <div class="col-8">
                <form action="" class="form-group ">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" class="form-control" placeholder="Buscar convênios..." aria-describedby="button-addon1">
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
                        <th scope="col">Convênios</th>
                        <th scope="col">Descontos</th>
                    {{-- </tr> --}}
                </thead>
                <tbody>
                    @forelse ($covenants as $covenant )
                        <tr class="">
                            <td scope="row">{{$covenant->id}}</td>
                            <td scope="row">{{$covenant->name}}</td>
                            <td scope="row">{{$covenant->discount}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-white" style="border:none;" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{route('covenants.show',['covenant'=>$covenant->id])}}">Visualizar</a>
                                        <a class="dropdown-item" href="{{route('covenant.destroy',['covenant'=>$covenant->id])}}">Apagar</a>
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