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
                            <tr>
                                <td>Max Henrique</td>
                                <td>maxhenrique308@gmail.com</td>
                                <td>31983086235</td>
                                <td>ipatinga/mg</td>
                                <td>o melhor programador de ipatinga</td>
                                <td>
                                    <a href="{{route('excluir',1)}}" class="btn btn-danger">Excluir</a>
                                    <a href="{{route('editar',1)}}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--BODY-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
