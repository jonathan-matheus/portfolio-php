<?php
// Array de projetos com dados dinâmicos
$projetos = [
    [
        'titulo' => 'Sistema de Gerenciamento de Tarefas',
        'status' => '✅',
        'ano' => '2023',
        'status_texto' => 'finalizado',
        'imagem' => 'foto do projeto',
        'tecnologias' => [
            ['nome' => 'PHP', 'cor_bg' => 'bg-fuchsia-400', 'cor_text' => 'text-fuchsia-900'],
            ['nome' => 'JavaScript', 'cor_bg' => 'bg-lime-400', 'cor_text' => 'text-lime-900'],
            ['nome' => 'HTML', 'cor_bg' => 'bg-sky-400', 'cor_text' => 'text-sky-900'],
            ['nome' => 'CSS', 'cor_bg' => 'bg-rose-400', 'cor_text' => 'text-rose-900']
        ],
        'descricao' => 'Sistema web completo para gerenciamento de tarefas diárias. Permite criar, editar, marcar como concluído e organizar tarefas por categorias. Desenvolvido com PHP no backend e JavaScript no frontend para uma experiência interativa.'
    ],
    [
        'titulo' => 'E-commerce Responsivo',
        'status' => '🚧',
        'ano' => '2024',
        'status_texto' => 'em desenvolvimento',
        'imagem' => 'foto do projeto',
        'tecnologias' => [
            ['nome' => 'PHP', 'cor_bg' => 'bg-fuchsia-400', 'cor_text' => 'text-fuchsia-900'],
            ['nome' => 'MySQL', 'cor_bg' => 'bg-orange-400', 'cor_text' => 'text-orange-900'],
            ['nome' => 'Bootstrap', 'cor_bg' => 'bg-purple-400', 'cor_text' => 'text-purple-900'],
            ['nome' => 'jQuery', 'cor_bg' => 'bg-blue-400', 'cor_text' => 'text-blue-900']
        ],
        'descricao' => 'Plataforma de e-commerce completa com carrinho de compras, sistema de pagamento, gestão de produtos e painel administrativo. Interface responsiva e otimizada para dispositivos móveis.'
    ],
    [
        'titulo' => 'API Rest para Blog',
        'status' => '✅',
        'ano' => '2024',
        'status_texto' => 'finalizado',
        'imagem' => 'foto do projeto',
        'tecnologias' => [
            ['nome' => 'PHP', 'cor_bg' => 'bg-fuchsia-400', 'cor_text' => 'text-fuchsia-900'],
            ['nome' => 'MySQL', 'cor_bg' => 'bg-orange-400', 'cor_text' => 'text-orange-900'],
            ['nome' => 'JSON', 'cor_bg' => 'bg-yellow-400', 'cor_text' => 'text-yellow-900'],
            ['nome' => 'REST', 'cor_bg' => 'bg-green-400', 'cor_text' => 'text-green-900']
        ],
        'descricao' => 'API REST completa para sistema de blog com autenticação JWT, CRUD de posts, sistema de comentários, categorias e tags. Documentação completa com Swagger e testes unitários.'
    ]
];

// Loop for para renderizar os projetos dinamicamente
for ($i = 0; $i < count($projetos); $i++) {
    $projeto = $projetos[$i];
    ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center">
        <div class="w-1/5"><?php echo $projeto['imagem']; ?></div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3">
                <h3 class="font-semibold text-xl">
                    <?php echo $projeto['status']; ?>     <?php echo $projeto['titulo']; ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">
                        (<?php echo $projeto['status_texto']; ?> em <?php echo $projeto['ano']; ?>)
                    </span>
                </h3>
                <div>
                    <?php for ($j = 0; $j < count($projeto['tecnologias']); $j++) {
                        $tech = $projeto['tecnologias'][$j];
                        ?>
                        <span
                            class="<?php echo $tech['cor_bg']; ?> <?php echo $tech['cor_text']; ?> rounded-md px-2 py-1 font-semibold text-xs">
                            <?php echo $tech['nome']; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>
            <p class="leading-6">
                <?php echo $projeto['descricao']; ?>
            </p>
        </div>
    </div>
<?php } ?>