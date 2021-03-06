@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.suplente')}}" class="breadcrumb">Suplentes</a>
    <a href="{{route ('admin.suplente.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    @section('titulo-header', 'Relatórios projetos suplentes')

    @section('conteudo-header', 'Esses são os relatórios dos projetos suplentes disponíveis no sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            @include('_layouts._mensagem-sucesso')
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os projetos suplentes de forma resumida</span>
                            <p>Para gerar um relatório de todos os projetos do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small pink darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos projetos suplentes completo</span>
                            <p>Para gerar um relatório de todos os dados dos projetos suplentes do sistema</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small indigo darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projetos suplentes por escola</span>
                            <p>Para gerar um relatório dos projetos suplentes de cada escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projetos suplentes por categoria</span>
                            <p>Para gerar um relatório dos projetos suplentes por categoria do sistema./p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" disabled type="submit" data-target="modal1"
                                    href="#modal1">Relatório
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projetos suplentes por disciplina</span>
                            <p>Para gerar um relatório dos projetos suplentes por disciplinas do sistema./p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" disabled type="submit" data-target="modal1"
                                    href="#modal1">Relatório
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small purple darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projeto suplente individual</span>
                            <p>Para gerar um relatório de um projeto suplente específico do sistema./p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" disabled type="submit" data-target="modal1"
                                    href="#modal1">Relatório
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Projetos</h4>

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="tipo" required>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="nome">Nome</option>
                                <option value="escola">Escola</option>
                            </select>
                            <label>Filtros</label>
                        </div>

                        <div class="input-field col s7">
                            <input id="search" type="search" name="search" required>
                            <label for="search">Pesquise no sistema...</label>
                        </div>
                        {{csrf_field()}}
                        <div class="input-field col s1">
                            <button type="submit" class="btn-floating"><i class="material-icons">search</i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Escola</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($projetos as $projeto)
                        <tr>
                            <td>{{$projeto->id}}</td>
                            <td>{{$projeto->titulo}}</td>
                            <td>{{$projeto->escola->name}}</td>
                            <td>
                                <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                                   data-tooltip="Editar"
                                   href="{{ url("admin/projeto/update/".$projeto->id."/edita") }}"><i
                                            class="small material-icons">edit</i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhum projeto encontrado</td>
                            <td>Nenhum projeto encontrado</td>
                            <td>Nenhum projeto encontrado</td>
                            <td>Nenhum projeto encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$projetos->links()}}

            </div>
            <div class="modal-footer">
                <a class="btn red delete">Ok</a>
            </div>
        </div>

@endsection