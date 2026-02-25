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
        <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <th scope="row">
                        <p><?php echo e($t->id); ?></p>
                    </th>
                    <td>
                        <p><?php echo e($t->nome); ?></p>
                    </td>
                    <td>
                        <p><?php echo e($t->DataInicio); ?></p>
                    </td>
                    <td>
                        <p><?php echo e($t->DataLimite); ?></p>
                    </td>
                    <td>
                        <p><?php echo e($t->StatusTarefa); ?></p>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\rodri\GerenciadorDeTarefas\resources\views/tarefas.blade.php ENDPATH**/ ?>