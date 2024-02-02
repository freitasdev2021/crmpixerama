@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a class="btn btn-success" href="{{route('adicionar')}}">Adicionar</a>
            <div class="card" style="margin-top:10px;">
                <div class="card-header">Lista de Leads</div>
                <div class="card-body text-center">
                    <!--BODY-->
                    <table class="table" border>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Localidade</th>
                                <th>Mensagem</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($leads as $l)
                            <tr>
                                <td>{{$l->NMLead}}</td>
                                <td>{{$l->NMEmailLead}}</td>
                                <td>{{$l->NUTelefoneLead}}</td>
                                <td>{{$l->NMCidadeLead}}/{{$l->UF}}</td>
                                <td>{{$l->DSMensagem}}</td>
                                <td>
                                    <a href="{{route('excluir',$l->id)}}" class="btn btn-danger">Excluir</a>
                                    <a href="{{route('editar',$l->id)}}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--BODY-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
