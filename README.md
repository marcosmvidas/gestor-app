e-Gestor


O **e-Gestor** é um sistema robusto e escalável, desenvolvido para gerenciamento de estoque, fornecedores, contas contábeis, folha de pagamento e outros módulos administrativos. 
Este projeto adota as melhores práticas de desenvolvimento, como princípios SOLID DRY aplicando as boas práticas em programação, e utiliza tecnologias modernas para oferecer uma solução eficiente para negócios de diversos tipos.


Índice
1. Visão Geral do Projeto
2. Funcionalidades
3. Tecnologias Utilizadas
4. Configuração e Instalação
5. Estrutura do Sistema
6. Próximos Passos
7. Contribuição


Visão Geral do Projeto
O **e-Gestor** foi projetado para atender às necessidades de pequenas e médias empresas, fornecendo ferramentas para:
- Gerenciamento de estoques.
- Cadastro de fornecedores e clientes.
- Controle de contas contábeis com classificação sintética e analítica.
- Relatórios detalhados e gráficos gerenciais.

O sistema é modular e personalizável, permitindo adaptações conforme o setor de atuação da empresa.


Funcionalidades
- Dashboard interativo: Visualização de dados como produtos mais vendidos, fornecedores a serem pagos, e clientes com saldos pendentes.
- Gestão de Contas Contábeis:
  - Cadastro e listagem com paginação.
  - Atualização e exclusão de contas.
- Gerenciamento de Fornecedores:
  - Cadastro com validação de CNPJ.
  - Integração de endereços diretamente no cadastro do fornecedor.
- Sistema de estoque:
  - Registro de produtos e composição de preços.
  - Suporte a quantidades fracionadas (ex.: 1.5 kg ou 100.5 unidades).
- Sistema de folha de pagamento:
  - Registro de funcionários e beneficiários eventos para o e-social.
  - Registro de cargo e salários, horas extras, benefícios e outras rubricas.
  - Suporte a cálculos de férias, 13º salário e TRCT.
- Estilo aprimorado:
  - Campos de busca reutilizáveis com ícones alinhados.
  - Tabelas responsivas com destaque em hover para melhorar a experiência do usuário.


Tecnologias Utilizadas
Backend:
- Laravel: Framework PHP para construção de APIs REST e backend robusto.
- Livewire: Para criar interfaces dinâmicas sem necessidade de JavaScript adicional.
- MySQL: Banco de dados para armazenamento de informações.

Frontend:
- HTML/CSS: Customizado com foco em responsividade e acessibilidade.
- Tailwind CSS: Framework CSS para estilização moderna.
- Font Awesome: Ícones para melhorar a interface.

Outras Ferramentas:
- Git: Controle de versão.
- Docker (planejado): Para contêinerização e maior portabilidade.


Configuração e Instalação
Pré-requisitos:
- PHP 8.1+ com extensões necessárias para Laravel.
- Composer: Gerenciador de dependências PHP.
- Node.js (para gerenciamento do frontend).
- MySQL: Banco de dados relacional.

Passos para configuração:
1. Clone este repositório:
   git clone <url-do-repositorio>
   cd e-gestor

2. Instale as dependências do Laravel:
   composer install

3. Configure o arquivo .env:
   - Copie o exemplo:
     cp .env.example .env
   - Ajuste as configurações de banco de dados.

4. Gere a chave da aplicação:
   php artisan key:generate

5. Execute as migrações e seeds (se necessário):
   php artisan migrate --seed

6. Inicie o servidor de desenvolvimento:
   php artisan serve


Estrutura do Sistema
Backend:
- Services: Lógica de negócios, como criação de contas contábeis.
- Repositories: Camada de abstração para acesso ao banco de dados.
- Models: Representação das entidades como ContaContabil e Fornecedor.

Frontend:
- Componentes reutilizáveis como inputs de busca (global-input-find).
- Páginas dinâmicas geradas com Livewire.


Próximos Passos
- Integração com RabbitMQ: Para comunicação entre microserviços.
- Gráficos gerenciais: Dashboard com mais métricas visuais.
- Suporte a multi-tenancy: Adaptação do sistema para múltiplas empresas no mesmo ambiente.


Contribuição
Contribuições são bem-vindas! Siga os passos abaixo:
1. Faça um fork deste repositório.
2. Crie uma nova branch:
   git checkout -b feature/sua-feature

3. Commit suas mudanças:
   git commit -m "Descrição da feature"

4. Envie suas alterações:
   git push origin feature/sua-feature

5. Abra um pull request.

Desenvolvido com 💻 e dedicação para otimizar a gestão de empresas.
