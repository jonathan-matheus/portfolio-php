# 💼 Portfólio Pessoal - PHP & Tailwind CSS

!['Site'](./assets/site.png)

Um portfólio pessoal moderno e responsivo desenvolvido em PHP puro com Tailwind CSS, apresentando projetos e habilidades de forma elegante e profissional.

## 🌟 Preview

![Portfólio](https://via.placeholder.com/800x400/1e293b/f1f5f9?text=Meu+Portfólio)

## 🚀 Tecnologias Utilizadas

- **PHP 8+** - Backend e estrutura de componentes
- **Tailwind CSS 4.1.13** - Estilização e design responsivo
- **HTML5** - Estrutura semântica
- **JavaScript** - Interatividade (planejado)
- **Git** - Controle de versão

## 📁 Estrutura do Projeto

```
portfolio-php/
├── assets/                 # Recursos estáticos
│   ├── avatar.svg          # Avatar do perfil
│   ├── facebook.png        # Ícone Facebook
│   ├── linkedin.png        # Ícone LinkedIn
│   ├── twitter.png         # Ícone Twitter
│   └── youtube.png         # Ícone YouTube
├── components/             # Componentes PHP reutilizáveis
│   ├── header.php          # Cabeçalho e navegação
│   ├── hero.php            # Seção principal do perfil
│   └── projetos.php        # Lista dinâmica de projetos
├── src/                    # Arquivos de estilo
│   ├── input.css           # CSS de entrada do Tailwind
│   └── output.css          # CSS compilado do Tailwind
├── index.php               # Página principal
├── package.json            # Dependências do Node.js
└── README.md               # Este arquivo
```

## ✨ Funcionalidades

- 🎨 **Interface Moderna** - Design limpo com tema escuro
- 🔧 **Componentes Modulares** - Estrutura PHP organizada em componentes
- 📊 **Projetos Dinâmicos** - Sistema de loop para exibir projetos
- 🔗 **Links Sociais** - Integração com redes sociais
- 🎯 **SEO Friendly** - Estrutura HTML semântica

## 🛠️ Como Executar o Projeto

### Pré-requisitos

- PHP 8.0 ou superior
- Node.js e npm (para compilar o Tailwind CSS)
- Servidor web (Apache/Nginx) ou PHP built-in server

### Instalação

1. **Clone o repositório**

   ```bash
   git clone https://github.com/jonathan-matheus/portfolio-php.git
   cd portfolio-php
   ```

2. **Instale as dependências do Tailwind CSS**

   ```bash
   npm install
   ```

3. **Compile o CSS do Tailwind**

   ```bash
   # Compilação única
   npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css

   # Ou com watch para desenvolvimento
   npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch
   ```

4. **Execute o servidor PHP**

   ```bash
   # Usando o servidor built-in do PHP
   php -S localhost:8000

   # Ou configure no seu servidor web preferido
   ```

5. **Acesse o projeto**
   ```
   http://localhost:8000
   ```

## 🎨 Personalização

### Adicionando Novos Projetos

Para adicionar um novo projeto, edite o array `$projetos` em `components/projetos.php`:

```php
$projetos[] = [
    'titulo' => 'Seu Novo Projeto',
    'status' => '✅', // ✅ (finalizado) ou 🚧 (em desenvolvimento)
    'ano' => '2024',
    'status_texto' => 'finalizado',
    'imagem' => 'caminho/para/imagem.jpg',
    'tecnologias' => [
        ['nome' => 'PHP', 'cor_bg' => 'bg-fuchsia-400', 'cor_text' => 'text-fuchsia-900'],
        // Adicione mais tecnologias...
    ],
    'descricao' => 'Descrição detalhada do seu projeto...'
];
```

### Modificando Informações Pessoais

- **Nome e descrição**: Edite `components/hero.php`
- **Links sociais**: Modifique o array `$itens` em `components/hero.php`
- **Navegação**: Ajuste o array `$itens` em `components/header.php`

### Personalizando Cores e Estilos

Modifique o arquivo `src/input.css` e recompile com:

```bash
npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css
```

## 🤝 Contribuindo

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## Autor

| [<img src="https://avatars.githubusercontent.com/u/109118732?s=96&v=4" width=115><br><sub>Jonathan Matheus</sub>](https://github.com/jonathan-matheus)
| :---: |
