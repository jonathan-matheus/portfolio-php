<?php
$itens = [
    ['href' => 'https://github.com/seuusuario', 'texto' => 'Facebook'],
    ['href' => 'https://www.linkedin.com/in/seuusuario', 'texto' => 'LinkedIn'],
    ['href' => 'https://www.x.com/seuusuario', 'texto' => 'Twitter'],
    ['href' => 'https://youtube.com/seuusuario', 'texto' => 'YouTube']
];
?>
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
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" class="hover:underline">
                        <img class="h-8 hover:animate-bounce" src="./assets/<?= strtolower($item['texto']) ?>.png"
                            alt="<?= strtolower($item['texto']) ?> icone">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        </p>
    </div>

    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img class="h-52" src="./assets/avatar.svg" alt="">
        </div>
    </div>
</section>