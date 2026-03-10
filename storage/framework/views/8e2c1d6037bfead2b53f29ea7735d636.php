<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../public/css/cadastrarTarefas.css">
    <title>Cadastrar Tarefa</title>
</head>

<body class="bg-dark">
    <div class="container mt-5 rounded-3 pd-5" style="background-color:rgb(64, 64, 64); padding: 20px; ">
        <h1 class="text-center mb-4 text-light">Cadastrar Nova Tarefa</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('tarefas.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nome" class="form-label text-light">Nome da Tarefa</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="DataInicio" class="form-label text-light">Data de Início</label>
                <input type="date" class="form-control" id="DataInicio" name="DataInicio" required>
            </div>
            <div class="mb-3">
                <label for="DataLimite" class="form-label text-light">Data Limite</label>
                <input type="date" class="form-control" id="DataLimite" name="DataLimite" required>
            </div>
            <div class="mb-3">
                <label for="StatusTarefa" class="form-label text-light">Status</label>
                <select class="form-select" id="StatusTarefa" name="StatusTarefa" required>
                    <option value="Pendente">Pendente</option>
                    <option value="Em Andamento">Em Andamento</option>
                    <option value="Concluída">Concluída</option>
                </select>
            </div>
            <div class="mb-3 text-light">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-select" id="tipo" name="tipo" required>
                    <option value="Trabalho">Trabalho</option>
                    <option value="Estudo">Estudo</option>
                    <option value="Lazer">Lazer</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn bg-success text-light d-block mx-auto justify-content-center" onclick="history.back()">Voltar</button>
                <button type="submit" class="btn bg-success text-light d-block mx-auto justify-content-center">Cadastrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\Users\userlocal\GerenciadorDeTarefas\resources\views/cadastrarTarefa.blade.php ENDPATH**/ ?>