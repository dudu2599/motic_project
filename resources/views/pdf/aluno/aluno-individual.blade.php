<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Todos alunos</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .motic{
            float: right;
            padding-bottom: 20px;
        }
        .pmsl{
            float: left;
        }
        .page-break {
            page-break-after: always;
        }
    </style>

</head>

<body>

<img src="{{public_path('images/LOGO_PMSL.png')}}" class="pmsl" width="1000px" height="300px">
<img src="{{public_path('images/motic.png')}}" class="motic" width="1200px" height="300px">

<h1>Aluno {{$aluno->name}}</h1>

<h2>Dados pessoais</h2>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$aluno->name}}</td>
            <td>{{$aluno->nascimento}}</td>
            <td>{{$aluno->sexo}}</td>
            <td>{{$aluno->cpf}}</td>
            <td>{{$aluno->email}}</td>
            <td>{{$aluno->telefone}}</td>
        </tr>
    </tbody>
</table>

<h2>Dados escolares</h2>

<table>
    <thead>
        <tr>
            <th>Escola</th>
            <th>Etapa/ano</th>
            <th>Turma</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$aluno->escola->name}}</td>
            <td>{{$aluno->etapa}}</td>
            <td>{{$aluno->turma}}</td>
        </tr>
    </tbody>
</table>

<h2>Endereço</h2>

<table>
    <thead>
        <tr>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$aluno->rua}}</td>
            <td>{{$aluno->numero}}</td>
            <td>{{$aluno->bairro}}</td>
            <td>{{$aluno->cep}}</td>
            <td>{{$aluno->cidade}}</td>
            <td>{{$aluno->estado}}</td>
            <td>{{$aluno->pais}}</td>
        </tr>
    </tbody>
</table>

</body>
</html>