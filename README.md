

---

# 🧾 Sistema de Orçamento e Propostas Comerciais

Sistema web para geração de orçamentos personalizados, com funcionalidades de cadastro de serviços, comunicação automatizada e gestão de usuários com permissões específicas.

## 🎨 Protótipo UI/UX (Figma)

[🔗 Acesse o protótipo completo no Figma](https://www.figma.com/design/MpkzKNMkdpxKj7YJB75qGs/Sistema-de-Or%C3%A7amento-e-Propostas-Comerciais?node-id=0-1)

---

## ⚙️ Regras de Negócio

### 1. Gestão de Usuários
- Login com e-mail e senha
- Bloqueio após 5 tentativas inválidas
- Cadastro com nome, CPF, telefone, etc.
- Permissões: Administrador, Vendedor, Cliente, Usuário
- Gerenciamento de permissões e recuperação de senha por link

### 2. Gestão de Serviços
- Cadastro e edição de serviços e produtos
- Tipos: Manutenção, Instalação, Equipamento, etc.
- Histórico de alterações (rastreabilidade)

### 3. Gestão de Comunicação
- Configuração de e-mail SMTP
- Histórico de mensagens enviadas (e-mail e WhatsApp)
- Configuração de alertas
- Integração com API do WhatsApp

### 4. Orçamentos Personalizados
- Cadastro de orçamentos com serviços/produtos
- Geração automática de PDF
- Envio por e-mail/WhatsApp
- Assinatura digital (simples ou gov.br)
- Histórico de negociações

---

## 🧪 Fluxo de Branches (Git Flow)

| Branch       | Finalidade                                      |
|--------------|--------------------------------------------------|
| `main`       | Produção (código estável)                        |
| `develop`    | Desenvolvimento principal                        |
| `feature/*`  | Funcionalidades específicas                      |
| `hotfix/*`   | Correções urgentes (bugs)                        |

### Exemplo:
```bash
# Criando uma nova funcionalidade
git checkout develop
git checkout -b feature/nova-funcionalidade

# Trabalhando e depois unindo na develop
git add .
git commit -m "Implementa nova funcionalidade"
git checkout develop
git merge feature/nova-funcionalidade
git push origin develop

#estrutura das pastas
app/                # Lógica do Laravel (Controllers, Models, etc.)
resources/views/    # Views Blade (frontend com Bootstrap)
routes/web.php      # Rotas principais da aplicação
public/             # Arquivos acessíveis publicamente (JS, CSS, imagens)
docs/               # Documentação do projeto (Figma, regras de negócio, etc.)


# Instalar dependências PHP
composer install

# Criar o arquivo .env
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate

# Rodar o servidor local
php artisan serve
