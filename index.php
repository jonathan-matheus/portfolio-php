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
  <header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- logo -->
    <div class="font-bold font-mono text-cyan-600">
      Meu Portfólio
    </div>

    <!-- Links -->
    <div>
      <ul class="flex gap-3 font-medium">
        <li><a href="#projetos" class="hover:underline">Projetos</a></li>
        <li><a href="#github" class="hover:underline">GitHub</a></li>
        <li><a href="#linkedin" class="hover:underline">LinkedIn</a></li>
        <li><a href="#instagram" class="hover:underline">Instagram</a></li>
      </ul>
    </div>
  </header>

  <!-- Main -->
  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <!-- Hero -->
    <section class="flex gap-x-3">
      <!-- Titulo e Descrição -->
      <div class="w-2/3">
        <h1 class="text-3xl font-bold">
          Oi, eu sou Jonathan
        </h1>
        <p class="text-xl leading-6 mt-6">
          Falando um pouco sobre mim, sou um desenvolvedor web apaixonado por
          criar soluções inovadoras e eficientes. Tenho experiência em diversas
          tecnologias e estou sempre buscando aprender mais para aprimorar
          minhas habilidades.
        </p>
        <p>
          <!-- Links de redes sociais -->
        <ul class="flex gap-x-3 mt-3">
          <li><a href="https://github.com/seuusuario" class="hover:underline">GitHub</a></li>
          <li><a href="https://www.linkedin.com/in/seuusuario" class="hover:underline">LinkedIn</a></li>
          <li><a href="https://www.instagram.com/seuusuario" class="hover:underline">Instagram</a></li>
          <li><a href="https://twitter.com/seuusuario" class="hover:underline">Twitter</a></li>
        </ul>
        </p>
      </div>

      <!-- Imagem -->
      <div class="w-1/3 flex items-center justify-center">
        <div>
          foto
        </div>
      </div>
    </section>

    <!-- Projetos -->
    <section class="space-y-3 py-6">
      <h2 class="text-2xl font-bold">Meus Projetos</h2>
      <div class="bg-slate-800 rounded-lg p-3 flex items-center">
        <div class="w-1/5">foto do projeto</div>
        <div class="w-4/5 space-y-3">
          <div class="flex gap-3">
            <h3 class="font-semibold text-xl">✅ Projeto 1 <span
                class="text-xs text-gray-400 opacity-50 italic">(finalizado em 2023)</span></h3>
            <div>
              <span class="bg-fuchsia-400 text-fuchsia-900 rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
              <span class="bg-lime-400 text-lime-900 rounded-md px-2 py-1 font-semibold text-xs">JavaScript</span>
              <span class="bg-sky-400 text-sky-900 rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
              <span class="bg-rose-400 text-rose-900 rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
            </div>
          </div>
          <p class="leading-6">
            Descrição do projeto 1. Este projeto é uma aplicação web que permite
            aos usuários gerenciar suas tarefas diárias de forma eficiente.
            Utiliza PHP no backend e JavaScript no frontend para uma experiência
            interativa.
          </p>
        </div>
      </div>
    </section>
  </main>
</body>

</html>