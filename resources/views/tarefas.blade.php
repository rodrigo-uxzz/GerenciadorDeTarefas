<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table table-dark table-striped">


        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Inicio</th>
                <th scope="col">Final</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        @foreach ($tarefas as $t)
            <tbody>
                <tr>
                    <th scope="row">
                        <p>{{ $t->id }}</p>
                    </th>
                    <td>
                        <p>{{ $t->nome }}</p>
                    </td>
                    <td>
                        <p>{{ $t->DataInicio }}</p>
                    </td>
                    <td>
                        <p>{{ $t->DataLimite }}</p>
                    </td>
                    <td>
                        <p>{{ $t->StatusTarefa }}</p>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
