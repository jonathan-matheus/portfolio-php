<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Portfólio</title>
  <link href="./src/output.css" rel="stylesheet">
</head>

<body class="bg-slate-900 text-gray-200">
  <!-- Header -->
  <?php include_once './components/header.php'; ?>

  <!-- Main -->
  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <!-- Hero -->
    <?php include_once './components/hero.php'; ?>

    <!-- Projetos -->
    <section class="space-y-3 py-6" id="projetos">
      <h2 class="text-2xl font-bold">Meus Projetos</h2>
      <?php include_once './components/projetos.php'; ?>
    </section>
  </main>
  <footer class="mx-auto max-w-screen-lg min-h-20 px-3">
    <div class="border-t border-gray-600 pt-6 text-gray-400 text-sm">
      <p>
        &copy; <?= date('Y') ?> Meu Portfólio. Todos os direitos reservados.
      </p>
    </div>
  </footer>
</body>

</html>