@extends('layouts.master')


@section('layout-header')
<title>Usuários</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="index.html" method="POST">
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Usuários </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 mb-3">
            <div class="col">
                <div class="btn-group">
                    <a href="{{route('users.index')}}" class="btn btn-outline-white border" style="font-size: 13px">Todos {{\DB::table('users')->count()}}</a>
                    <a href="{{route('user.activated')}}" class="btn btn-outline-white border" style="font-size: 13px">Ativados {{\DB::table('users')->where('status','=',true)->count()}}</a>
                    <a href="{{route('user.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Suspensos {{\DB::table('users')->where('status','=',false)->count()}}</a>
                </div>
            </div>
            <div class="col">
                <button type="submit" name="download" id="download" class="btn float-end btn-primary" style="margin-right:1rem; font-size:13px;">Incluir Usuário</button>
            </div>
        </div>



    {{-- <div class="w-100 h-100 bg-white"> --}}
        {{-- <div class="container "> --}}

        <div class="row ">
            <div class="col-8">
                <form action="" class="form-group ">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" class="form-control" placeholder="Buscar usuário..." aria-describedby="button-addon1">
                      </div>
                </form>
            </div>

            <div class="col-4">
                <select name="download" id="download" class="btn float-end btn-white border" style="margin-right:1rem">
                    <option>Ação</option>
                </select>
            </div>

        </div>
    {{-- </div> --}}
        
        <div class="table-responsive m-3">
            <table class="table">
                <thead>
                    {{-- <tr> --}}
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Status</th>
                    {{-- </tr> --}}
                </thead>
                <tbody>
                    @forelse ($users as $user )
                        <tr class="">
                            <td scope="row">{{$user->id}}</td>
                            <td scope="row">{{$user->name}}</td>
                            <td scope="row">{{$user->email}}</td>
                            <td></td>
                            <td>
                                @if ($user->status==true)
                                    <span class="badge text-bg-success">Ativo</span>
                                @else
                                    <span class="badge text-bg-warning">Suspenso</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-white" style="border:none;" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{route('user.show',['user'=>$user->id])}}">Visualizar</a>
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