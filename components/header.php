<?php
$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => '#github', 'texto' => 'GitHub'],
    ['href' => '#linkedin', 'texto' => 'LinkedIn'],
    ['href' => '#instagram', 'texto' => 'Instagram'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- logo -->
    <div class="font-bold font-mono text-cyan-600">
        Meu Portfólio
    </div>

    <!-- Links -->
    <div>
        <ul class="flex gap-3 font-medium">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" class="hover:underline"><?= $item['texto'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>