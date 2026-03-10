<!DOCTYPE html>
<html lang="en">

<head>
    <title>To Do List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet"/>
    <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
  background: #0f0e0c;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'DM Mono', monospace;
  padding: 2rem;
}

.container {
  width: 100%;
  max-width: 900px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 2rem;
}

.title {
  font-family: 'Playfair Display', serif;
  font-size: 2.2rem;
  color: #f5f0e8;
  letter-spacing: -0.02em;
}

.subtitle {
  font-size: 0.72rem;
  color: #c8a96e;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  margin-top: 0.3rem;
}

.badge {
  background: #c8a96e;
  color: #0f0e0c;
  font-size: 0.65rem;
  font-weight: 500;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 0.4rem 0.9rem;
  border-radius: 2px;
}

.table-wrap {
  border: 1px solid #2a2822;
  border-radius: 6px;
  overflow: hidden;
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background: #1a1915;
  border-bottom: 1px solid #c8a96e40;
}

th {
  text-align: left;
  padding: 1rem 1.4rem;
  font-size: 0.65rem;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: #c8a96e;
  font-weight: 500;
}

th:last-child, td:last-child {
  text-align: right;
}

tbody tr {
  border-bottom: 1px solid #1e1d1a;
  transition: background 0.18s ease;
}

tbody tr:last-child { border-bottom: none; }

tbody tr:hover {
  background: #161510;
}

td {
  padding: 1.05rem 1.4rem;
  font-size: 0.82rem;
  color: #d4cfc6;
}

.product-name {
  color: #f5f0e8;
  font-weight: 500;
}

.category {
  font-size: 0.7rem;
  color: #6b6760;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.status {
  display: inline-block;
  padding: 0.25rem 0.65rem;
  border-radius: 2px;
  font-size: 0.65rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  font-weight: 500;
}

.status.active   { background: #1a2e1a; color: #6fcf6f; border: 1px solid #6fcf6f30; }
.status.pending  { background: #2e2614; color: #c8a96e; border: 1px solid #c8a96e30; }
.status.paused   { background: #2a1a1a; color: #cf6f6f; border: 1px solid #cf6f6f30; }

.value {
  font-variant-numeric: tabular-nums;
  letter-spacing: 0.05em;
}

.value.positive { color: #6fcf6f; }
.value.negative { color: #cf6f6f; }

.bar-wrap {
  display: flex;
  align-items: center;
  gap: 0.7rem;
}

.bar-bg {
  flex: 1;
  height: 3px;
  background: #2a2822;
  border-radius: 2px;
  overflow: hidden;
}

.bar-fill {
  height: 100%;
  background: #c8a96e;
  border-radius: 2px;
  transition: width 0.4s ease;
}

.bar-pct {
  font-size: 0.7rem;
  color: #6b6760;
  width: 2.5rem;
  text-align: right;
}

tfoot {
  background: #151410;
  border-top: 1px solid #2a2822;
}

tfoot td {
  color: #f5f0e8;
  font-weight: 500;
  font-size: 0.8rem;
  padding: 1rem 1.4rem;
}

tfoot td:first-child {
  letter-spacing: 0.12em;
  text-transform: uppercase;
  font-size: 0.65rem;
  color: #c8a96e;
}

.footer-note {
  margin-top: 1.2rem;
  font-size: 0.65rem;
  color: #3a3830;
  letter-spacing: 0.08em;
  text-align: right;
}

.search-bar {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 1.5rem;  /* espaço entre o input e a tabela */
}

/* Renomeie no HTML para .input-wrapper para não conflitar com Bootstrap */
.input-wrapper {
  display: flex;
  align-items: center;
  background: #141310;
  border: 1px solid #2a2822;
  border-radius: 6px;
  overflow: hidden;
  width: 100%;
  max-width: 480px;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.input-wrapper:focus-within {
  border-color: #c8a96e60;
  box-shadow: 0 0 0 3px #c8a96e12;
}

.input-wrapper input {
  flex: 1;
  background: transparent;
  border: none;
  outline: none;
  font-family: 'DM Mono', monospace;
  font-size: 0.82rem;
  color: #f5f0e8;
  padding: 0.85rem 1.2rem;
  letter-spacing: 0.03em;
}

.input-wrapper input::placeholder {
  color: #3a3830;
}

.input-wrapper .divider {
  width: 1px;
  height: 1.4rem;
  background: #2a2822;
  flex-shrink: 0;
}

.input-wrapper button {
  background: transparent;
  border: none;
  cursor: pointer;
  font-family: 'DM Mono', monospace;
  font-size: 0.65rem;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #c8a96e;
  padding: 0.85rem 1.2rem;
  transition: background 0.15s ease, color 0.15s ease;
  white-space: nowrap;
}

.input-wrapper button:hover {
  background: #c8a96e15;
  color: #f5f0e8;
}

.cards-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1rem;
      width: 100%;
      margin-bottom: 2rem;
      max-width: 900px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .cards-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 420px) {
      .cards-grid { grid-template-columns: 1fr; }
    }

    /* Card */
    .card {
      background: #141310;
      border: 1px solid #2a2822;
      border-radius: 6px;
      padding: 1.4rem;
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      position: relative;
      overflow: hidden;
      transition: border-color 0.2s ease, transform 0.2s ease;
      cursor: default;
    }

    .card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 2px;
      background: var(--accent);
      opacity: 0.6;
      transition: opacity 0.2s ease;
    }

    .card:hover {
      border-color: var(--accent-dim);
      transform: translateY(-2px);
    }

    .card:hover::before {
      opacity: 1;
    }

    /* Accent colors por card */
    .card-total    { --accent: #c8a96e; --accent-dim: #c8a96e40; --count-color: #c8a96e; }
    .card-active   { --accent: #6fcf6f; --accent-dim: #6fcf6f40; --count-color: #6fcf6f; }
    .card-pending  { --accent: #e0a44a; --accent-dim: #e0a44a40; --count-color: #e0a44a; }
    .card-paused   { --accent: #cf6f6f; --accent-dim: #cf6f6f40; --count-color: #cf6f6f; }

    /* Título */
    .card-title {
      font-size: 0.62rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: #6b6760;
    }

    /* Contador */
    .card-count {
      font-family: 'Playfair Display', serif;
      font-size: 2.4rem;
      color: var(--count-color);
      letter-spacing: -0.02em;
      line-height: 1;
    }

    /* Subtítulo */
    .card-subtitle {
      font-size: 0.68rem;
      color: #3a3830;
      letter-spacing: 0.08em;
      border-top: 1px solid #1e1d1a;
      padding-top: 0.8rem;
      margin-top: auto;
    }

    .card-subtitle span {
      color: var(--count-color);
      opacity: 0.8;
    }
</style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gerador de Tarefas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
<a class="nav-link active" aria-current="page" href="<?php echo e(route('tarefas.cadastrar')); ?>">Criar Tarefa</a>          <li class="nav-item">
            <a class="nav-link" href="#">Configuração</a>
          </li>
          <li class="nav-item dropdown">
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search"/>
          <button class="btn btn-success" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<main class="container mt-5 pt-5">
<div class="search-bar">
  <div class="field-group" style="width:100%; max-width:480px;">
    <label for="nomeTarefa" style="display:block; font-size:0.65rem; letter-spacing:0.18em; text-transform:uppercase; color:#c8a96e; margin-bottom:0.5rem;">
      Nome da Tarefa
    </label>
    <div class="input-wrapper">
      <input
        type="text"
        id="nomeTarefa"
        name="nomeTarefa"
        placeholder="Digite o nome da tarefa..."
      />
      <span class="divider"></span>
      <button onclick="irParaCadastro()">Avançar →</button>
    </div>
    </div>
  </div>

  <div class="cards-grid">

    <div class="card card-total">
      <div class="card-title">Total de Tarefas</div>
      <div class="card-count">48</div>
      <div class="card-subtitle">Registradas <span>este mês</span></div>
    </div>

    <div class="card card-active">
      <div class="card-title">Em Andamento</div>
      <div class="card-count">21</div>
      <div class="card-subtitle"><span>⏳</span> Em execução agora</div>
    </div>

    <div class="card card-pending">
      <div class="card-title">Pendentes</div>
      <div class="card-count">19</div>
      <div class="card-subtitle"><span>❌</span> Aguardando início</div>
    </div>

    <div class="card card-paused">
      <div class="card-title">Concluídas</div>
      <div class="card-count">08</div>
      <div class="card-subtitle"><span>✅</span> Finalizadas</div>
    </div>

  </div>  

  <div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Inicio</th>
                <th scope="col">Final</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><span class="product-name"><?php echo e($t->nome); ?></span></th>
                <td><span class="category"><?php echo e($t->tipo); ?></span></td>
                <td><?php echo e($t->DataInicio); ?></td>
                <td><?php echo e($t->DataLimite); ?></td>
                <td>
                    <?php if($t->StatusTarefa === 'Concluída'): ?>
                        ✅  
                    <?php elseif($t->StatusTarefa === 'Pendente'): ?>
                        ❌
                    <?php elseif($t->StatusTarefa === 'Em Andamento'): ?>
                        ⏳
                    <?php else: ?>
                      dasdm
                    <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="6" class="text-center">Nenhuma tarefa encontrada.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

</body>

</html><?php /**PATH C:\GerenciadorDeTarefas\resources\views/tarefas.blade.php ENDPATH**/ ?>