# e-Gestor

O **e-Gestor** é um sistema robusto e escalável, desenvolvido para gerenciamento de estoque, fornecedores, contas contábeis, folha de pagamento e outros módulos administrativos. Este projeto adota as melhores práticas de desenvolvimento, como princípios SOLID e DRY, aplicando boas práticas em programação, e utiliza tecnologias modernas para oferecer uma solução eficiente para negócios de diversos tipos.

## Índice
1. [Visão Geral do Projeto](#visão-geral-do-projeto)
2. [Funcionalidades](#funcionalidades)
3. [Tecnologias Utilizadas](#tecnologias-utilizadas)
4. [Configuração e Instalação](#configuração-e-instalação)
5. [Estrutura do Sistema](#estrutura-do-sistema)
6. [Próximos Passos](#próximos-passos)
7. [Contribuição](#contribuição)

## Visão Geral do Projeto
O **e-Gestor** foi projetado para atender às necessidades de pequenas e médias empresas, fornecendo ferramentas para:
- Gerenciamento de estoques.
- Cadastro de fornecedores e clientes.
- Controle de contas contábeis com classificação sintética e analítica.
- Relatórios detalhados e gráficos gerenciais.

O sistema é modular e personalizável, permitindo adaptações conforme o setor de atuação da empresa. Ideal para empresas que buscam otimizar processos administrativos, financeiros e operacionais.

## Funcionalidades

### Dashboard interativo
- Visualização de dados como produtos mais vendidos, fornecedores a serem pagos e clientes com saldos pendentes. 

### Gestão de Contas Contábeis
- Cadastro e listagem com paginação.
- Atualização e exclusão de contas.
- Suporte a classificações sintéticas e analíticas.

### Gerenciamento de Fornecedores
- Cadastro com validação de CNPJ.
- Integração de endereços diretamente no cadastro do fornecedor.
- Listagem com filtros e ordenação.

### Sistema de Estoque
- Registro de produtos e composição de preços.
- Suporte a quantidades fracionadas (ex.: 1.5 kg ou 100.5 unidades).

### Sistema de Folha de Pagamento
- Registro de funcionários e beneficiários para e-Social.
- Registro de cargo e salários, horas extras, benefícios e outras rubricas.
- Cálculos automáticos de férias, 13º salário e TRCT.

### Estilo aprimorado
- Campos de busca reutilizáveis com ícones alinhados.
- Tabelas responsivas com destaque em hover para melhorar a experiência do usuário.

## Tecnologias Utilizadas

### Backend:
- **Laravel 10**: Framework PHP para construção de APIs REST e backend robusto.
- **Livewire**: Para criar interfaces dinâmicas sem necessidade de JavaScript adicional.
- **MySQL 8.0+**: Banco de dados relacional para armazenamento de informações.

### Frontend:
- **HTML/CSS**: Customizado com foco em responsividade e acessibilidade.
- **Tailwind CSS 3.x**: Framework CSS para estilização moderna.
- **Font Awesome**: Ícones para melhorar a interface.

### Outras Ferramentas:
- **Git**: Controle de versão.
- **Docker**: Planejado para contêinerização e maior portabilidade.

## Configuração e Instalação

### Pré-requisitos:
- **PHP 8.1+** com as extensões necessárias para Laravel.
- **Composer**: Gerenciador de dependências PHP.
- **Node.js**: Para gerenciamento do frontend.
- **MySQL**: Banco de dados relacional.

### Passos para configuração:
1. Clone este repositório:
   ```bash
   git clone <url-do-repositorio>
   cd e-gestor
   ```

2. Instale as dependências do Laravel:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   - Copie o arquivo de exemplo:
     ```bash
     cp .env.example .env
     ```
   - Ajuste as configurações de banco de dados e outras variáveis no `.env`.

4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

5. Execute as migrações e seeds (se necessário):
   ```bash
   php artisan migrate --seed
   ```

6. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

7. Após rodar o servidor, acesse **http://localhost:8000** no navegador para verificar se o sistema está funcionando corretamente.

## Estrutura do Sistema

### Backend:
- **Services**: Lógica de negócios, como criação de contas contábeis e fornecedores.
- **Repositories**: Camada de abstração para o acesso ao banco de dados.
- **Models**: Representação das entidades (ex: `ContaContabil`, `Fornecedor`).
- **Controllers**: Responsáveis pela lógica de controle e roteamento de requisições HTTP.

### Frontend:
- **Livewire Components**: Páginas dinâmicas geradas com Livewire.
- **Componentes reutilizáveis**: Como inputs de busca (ex: `global-input-find`).

## Próximos Passos
- **Integração com RabbitMQ**: Para comunicação eficiente entre microserviços.
- **Gráficos Gerenciais**: Expansão do dashboard com mais métricas visuais (ex: gráficos de despesas, receitas, etc).
- **Suporte a Multi-Tenancy**: Adaptação do sistema para suportar múltiplas empresas no mesmo ambiente, permitindo maior escalabilidade.

## Contribuição

Contribuições são bem-vindas! Para contribuir, siga os passos abaixo:

1. Faça um fork deste repositório.
2. Crie uma nova branch:
   ```bash
   git checkout -b feature/sua-feature
   ```

3. Realize suas modificações e faça commit:
   ```bash
   git commit -m "Descrição da feature"
   ```

4. Execute os testes:
   ```bash
   php artisan test
   ```

5. Envie suas alterações:
   ```bash
   git push origin feature/sua-feature
   ```

6. Abra um pull request.

Desenvolvido com 💻 e dedicação para otimizar a gestão de empresas.
