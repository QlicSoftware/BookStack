<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Configurações',
    'settings_save' => 'Salvar Configurações',
    'settings_save_success' => 'Configurações Salvas',

    // App Settings
    'app_customization' => 'Customização',
    'app_features_security' => 'Recursos & Segurança',
    'app_name' => 'Nome da Aplicação',
    'app_name_desc' => 'Esse nome será mostrado no cabeçalho e em e-mails.',
    'app_name_header' => 'Mostrar o nome da Aplicação no cabeçalho?',
    'app_public_access' => 'Acesso Público',
    'app_public_access_desc' => 'Habilitar esta opção irá permitir que visitantes, que não estão logados, acessem o conteúdo em sua instância do BookStack.',
    'app_public_access_desc_guest' => 'O acesso de visitantes públicos pode ser controlado através do usuário "Convidado".',
    'app_public_access_toggle' => 'Permitir acesso público',
    'app_public_viewing' => 'Permitir visualização pública?',
    'app_secure_images' => 'Permitir upload de imagens com maior segurança?',
    'app_secure_images_toggle' => 'Habilitar uploads de imagem de maior segurança',
    'app_secure_images_desc' => 'Por questões de performance, todas as imagens são públicas. Essa opção adiciona uma string randômica na frente da imagem. Certifique-se de que os índices do diretórios permitem o acesso fácil.',
    'app_editor' => 'Editor de Página',
    'app_editor_desc' => 'Selecione qual editor a ser usado pelos usuários para editar páginas.',
    'app_custom_html' => 'Conteúdo para tag HTML HEAD customizado',
    'app_custom_html_desc' => 'Quaisquer conteúdos aqui inseridos serão inseridos no final da seção <head> do HTML de cada página. Essa é uma maneira útil de sobrescrever estilos e adicionar códigos de análise de site.',
    'app_custom_html_disabled_notice' => 'O conteúdo personalizado do head do HTML está desabilitado nesta página de configurações para garantir que quaisquer alterações significativas possam ser revertidas.',
    'app_logo' => 'Logo da Aplicação',
    'app_logo_desc' => 'A imagem deve ter 43px de altura. <br>Imagens mais largas devem ser reduzidas.',
    'app_primary_color' => 'Cor primária da Aplicação',
    'app_primary_color_desc' => 'Esse valor deverá ser Hexadecimal. <br>Deixe em branco para que o Bookstack assuma a cor padrão.',
    'app_homepage' => 'Página incial',
    'app_homepage_desc' => 'Selecione a página para ser usada como página inicial em vez da padrão. Permissões da página serão ignoradas.',
    'app_homepage_select' => 'Selecione uma página',
    'app_disable_comments' => 'Desativar Comentários',
    'app_disable_comments_toggle' => 'Desativar comentários',
    'app_disable_comments_desc' => 'Desativar comentários em todas as páginas no aplicativo. Os comentários existentes não são exibidos.',

    // Registration settings
    'reg_settings' => 'Registro',
    'reg_enable' => 'Habilitar Registro',
    'reg_enable_toggle' => 'Habilitar registro',
    'reg_enable_desc' => 'Quando o registro é habilitado, o usuário poderá se registrar como usuário do aplicativo. No registro, eles recebem um único perfil padrão.',
    'reg_default_role' => 'Perfil padrão para usuários após o registro',
    'reg_email_confirmation' => 'Confirmação de E-mail',
    'reg_email_confirmation_toggle' => 'Requer confirmação de e-mail',
    'reg_confirm_email_desc' => 'Se restrições de domínio são usadas a confirmação por e-mail será requerida e o valor abaixo será ignorado.',
    'reg_confirm_restrict_domain' => 'Restringir registro ao domínio',
    'reg_confirm_restrict_domain_desc' => 'Entre com uma lista de domínios de e-mails separados por vírgula para os quais você deseja restringir os registros. Será enviado um e-mail de confirmação para o usuário validar o e-mail antes de ser permitido interação com a aplicação. <br> Note que os usuários serão capazes de alterar o e-mail cadastrado após o sucesso na confirmação do registro.',
    'reg_confirm_restrict_domain_placeholder' => 'Nenhuma restrição configurada',

    // Maintenance settings
    'maint' => 'Manutenção',
    'maint_image_cleanup' => 'Limpeza de Imagens',
    'maint_image_cleanup_desc' => "Examina páginas & revisa o conteúdo para verificar quais imagens e desenhos estão atualmente em uso e quais imagens são redundantes. Certifique-se de criar um backup completo do banco de dados e imagens antes de executar isso.",
    'maint_image_cleanup_ignore_revisions' => 'Ignorar imagens em revisões',
    'maint_image_cleanup_run' => 'Executar Limpeza',
    'maint_image_cleanup_warning' => ':count imagens potencialmente não utilizadas foram encontradas. Tem certeza de que deseja excluir estas imagens?',
    'maint_image_cleanup_success' => ':count imagens potencialmente não utilizadas foram encontradas e excluídas!',
    'maint_image_cleanup_nothing_found' => 'Nenhuma imagem não utilizada foi encontrada, nada foi excluído!',

    // Role settings
    'roles' => 'Perfis',
    'role_user_roles' => 'Perfis de Usuário',
    'role_create' => 'Criar novo Perfil',
    'role_create_success' => 'Perfil criado com sucesso',
    'role_delete' => 'Excluir Perfil',
    'role_delete_confirm' => 'A ação vai excluír o Perfil de nome \':roleName\'.',
    'role_delete_users_assigned' => 'Esse Perfil tem :userCount usuários assinalados a ele. Se quiser migrar usuários desse Perfil para outro, selecione um novo Perfil.',
    'role_delete_no_migration' => "Não migre os usuários",
    'role_delete_sure' => 'Tem certeza que deseja excluir esse Perfil?',
    'role_delete_success' => 'Perfil excluído com sucesso',
    'role_edit' => 'Editar Perfil',
    'role_details' => 'Detalhes do Perfil',
    'role_name' => 'Nome do Perfil',
    'role_desc' => 'Descrição Curta do Perfil',
    'role_external_auth_id' => 'IDs de Autenticação Externa',
    'role_system' => 'Permissões do Sistema',
    'role_manage_users' => 'Gerenciar Usuários',
    'role_manage_roles' => 'Gerenciar Perfis & Permissões de Perfis',
    'role_manage_entity_permissions' => 'Gerenciar todos os livros, capítulos e permissões de páginas',
    'role_manage_own_entity_permissions' => 'Gerenciar permissões de seu próprio livro, capítulo e paginas',
    'role_manage_settings' => 'Gerenciar configurações de app',
    'role_asset' => 'Permissões de Ativos',
    'role_asset_desc' => 'Essas permissões controlam o acesso padrão para os ativos dentro do sistema. Permissões em Livros, Capítulos e Páginas serão sobrescritas por essas permissões.',
    'role_asset_admins' => 'Administradores recebem automaticamente acesso a todo o conteúdo, mas essas opções podem mostrar ou ocultar as opções da UI.',
    'role_all' => 'Todos',
    'role_own' => 'Próprio',
    'role_controlled_by_asset' => 'Controlado pelos ativos que você fez upload',
    'role_save' => 'Salvar Perfil',
    'role_update_success' => 'Perfil atualizado com sucesso',
    'role_users' => 'Usuários neste Perfil',
    'role_users_none' => 'Nenhum usuário está atualmente atrelado a esse Perfil',

    // Users
    'users' => 'Usuários',
    'user_profile' => 'Perfil do Usuário',
    'users_add_new' => 'Adicionar Novo Usuário',
    'users_search' => 'Pesquisar Usuários',
    'users_details' => 'Detalhes do Usuário',
    'users_details_desc' => 'Defina um nome de exibição e um endereço de e-mail para este usuário. O endereço de e-mail será usado para fazer login na aplicação.',
    'users_details_desc_no_email' => 'Defina um nome de exibição para este usuário para que outros usuários possam reconhecê-lo',
    'users_role' => 'Perfis do Usuário',
    'users_role_desc' => 'Selecione os perfis para os quais este usuário será atribuído. Se um usuário for atribuído a multiplos perfis, as permissões destes perfis serão empilhadas e eles receberão todas as habilidades dos perfis atribuídos.',
    'users_password' => 'Senha do Usuário',
    'users_password_desc' => 'Defina uma senha usada para fazer login na aplicação. Esta deve ter pelo menos 5 caracteres.',
    'users_external_auth_id' => 'ID de Autenticação Externa',
    'users_external_auth_id_desc' => 'Este é o ID usado para corresponder a este usuário ao se comunicar com seu sistema LDAP.',
    'users_password_warning' => 'Preencha os dados abaixo caso queira modificar a sua senha:',
    'users_system_public' => 'Esse usuário representa quaisquer convidados que visitam o aplicativo. Ele não pode ser usado para login.',
    'users_delete' => 'Excluir Usuário',
    'users_delete_named' => 'Excluir :userName',
    'users_delete_warning' => 'A ação vai excluir completamente o usuário de nome \':userName\' do sistema.',
    'users_delete_confirm' => 'Tem certeza que deseja excluir esse usuário?',
    'users_delete_success' => 'Usuários excluídos com sucesso',
    'users_edit' => 'Editar usuário',
    'users_edit_profile' => 'Editar Perfil',
    'users_edit_success' => 'Usuário atualizado com sucesso',
    'users_avatar' => 'Imagem de Usuário',
    'users_avatar_desc' => 'Essa imagem deve ser um quadrado com aproximadamente 256px de altura e largura.',
    'users_preferred_language' => 'Linguagem de Preferência',
    'users_preferred_language_desc' => 'Esta opção irá alterar o idioma usado para a interface de usuário da aplicação. Isto não afetará nenhum conteúdo criado pelo usuário.',
    'users_social_accounts' => 'Contas Sociais',
    'users_social_accounts_info' => 'Aqui você pode conectar outras contas para acesso mais rápido. Desconectar uma conta não retira a possibilidade de acesso usando-a. Para revogar o acesso ao perfil através da conta social, você deverá fazê-lo na sua conta social.',
    'users_social_connect' => 'Contas conectadas',
    'users_social_disconnect' => 'Desconectar Conta',
    'users_social_connected' => 'Conta :socialAccount foi conectada com sucesso ao seu perfil.',
    'users_social_disconnected' => 'Conta :socialAccount foi desconectada com sucesso de seu perfil.',

];






























