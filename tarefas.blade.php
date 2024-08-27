<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Sobre </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td> 
                    <td>{{ $tarefa->titulo }}</td> 
                    <td>{{ $tarefa->descricao }}</td> 
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>