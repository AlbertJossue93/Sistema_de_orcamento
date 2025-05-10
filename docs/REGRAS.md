# Regras de Negócio - Sistema de Orçamento e Propostas Comerciais

## 1. Módulo: Gestão de Usuários

### Tela de Login
- O login deve ser realizado com e-mail e senha.
- O sistema verifica se as credenciais são válidas e se o usuário possui permissão para acessar o sistema.
- Se as credenciais forem incorretas, o usuário recebe uma mensagem de erro.
- Após 5 tentativas falhas, a conta é temporariamente bloqueada por 30 minutos.

### Tela de Cadastro de Usuário
- O administrador deve preencher um formulário com campos obrigatórios: nome completo, e-mail, CPF, telefone, endereço, senha.
- Após o cadastro, o sistema envia um e-mail de confirmação.

### Permissões
- O usuário pode ser atribuído a diferentes permissões: "Usuário", "Vendedor", "Cliente", "Administrador".
- A permissão "Administrador" dá acesso a todas as funcionalidades do sistema, enquanto as outras possuem acessos restritos (vendedores podem apenas criar e gerenciar orçamentos, clientes podem visualizar apenas os orçamentos criados para eles, etc.).

### Tela de Gerenciar Permissões
- Administradores podem visualizar a tabela de usuários com nome, e-mail e sua permissão atual.
- Eles podem editar permissões, atualizar dados ou excluir usuários.

### Tela de Recuperação de Senha
- O sistema envia um e-mail para o usuário com um link para redefinir a senha, caso o e-mail fornecido seja válido.
- O link tem validade de 30 minutos.

---

## 2. Módulo: Gestão de Serviços

### Tela de Cadastro de Serviço
- O administrador deve fornecer as informações essenciais sobre o serviço: nome, tipo, valor.
- O tipo de serviço pode incluir categorias como "Manutenção", "Instalação", etc.
- Cada serviço será registrado com um valor, e o sistema deve garantir que os dados sejam únicos.

### Tela de Cadastro de Produto
- O administrador registra produtos, informando nome, tipo (material ou equipamento) e valor.
- Isso ajudará no controle de inventário e no preço de venda dos produtos.

### Tela de Atualizar Dados de Serviço
- O administrador pode editar ou atualizar os serviços cadastrados.
- Caso o serviço já tenha sido vinculado a um orçamento, ele pode ser desativado, mas não excluído.
- O sistema deve registrar todas as alterações feitas (nome, preço, etc.) para fins de rastreabilidade.

---

## 3. Módulo: Gestão de Comunicação

### Tela de Configuração de E-mail
- O administrador configura o servidor de e-mail (SMTP) para envio automático de orçamentos, notificações e relatórios para clientes, vendedores e prestadores de serviço.
- O sistema deve garantir que o e-mail seja enviado corretamente, com base nas configurações fornecidas.

### Tela de Relatório de Mensagens Enviadas
- O sistema deve permitir que o administrador visualize um histórico das mensagens enviadas (e-mails e WhatsApp).
- Isso inclui informações como data, destinatário, assunto e status (enviado, falhou, pendente).

### Tela de Configuração de Alerta
- O administrador configura alertas para ações como vencimento de orçamentos, prazos de serviços, ou mudanças no status de orçamentos.
- O sistema deve enviar essas notificações por e-mail ou WhatsApp, conforme a preferência do usuário.

### Tela de WhatsApp
- O sistema pode integrar com o WhatsApp para o envio automático de mensagens, como lembretes de orçamentos, confirmações de recebimento e notificações sobre novos orçamentos.
- A configuração do WhatsApp deve ser feita com uma API externa, e o administrador deve poder gerenciar as mensagens enviadas.

---

## 4. Módulo: Orçamento Personalizado

### Tela de Cadastrar Orçamento Personalizado
- O vendedor seleciona o cliente e o prestador de serviço, e escolhe os serviços/produtos que o cliente deseja incluir no orçamento.
- O sistema calcula automaticamente o valor total.
- O orçamento pode ser editado, e o vendedor pode incluir notas adicionais ou descontos.

### Botão "Gerar Orçamento"
- Ao clicar em "Gerar Orçamento", o sistema gera uma proposta em PDF, que pode ser enviada ao cliente por e-mail ou WhatsApp.

### Tela de Assinatura Digital
- O cliente pode assinar o orçamento digitalmente.
- Se for implementado com o gov.br, o sistema pode usar a assinatura digital do cliente.
- Caso contrário, a assinatura será feita por meio de um sistema simples de confirmação via link enviado por e-mail.

### Tela de Histórico de Negociações
- O sistema mantém um registro de todas as negociações, com status como "Realizados", "Cancelados" e "Efetivados".
- O administrador e vendedor podem acessar este histórico para acompanhar o progresso de cada negociação.

### Estrutura do PDF
- O orçamento gerado em PDF deve conter as informações do cliente, prestador de serviço, serviços/produtos selecionados, valor total, condições de pagamento, prazos e observações do vendedor.
- O PDF deve ser gerado automaticamente ao clicar no botão "Gerar Orçamento" e ser enviado ao cliente.
