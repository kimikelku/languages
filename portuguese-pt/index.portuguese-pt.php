<?php
// Version: 2.0; Index

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//		http://www.php.net/function.pspell-new
//		http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!! Please read this!
$txt['lang_name'] = 'Português (PT)';
$txt['lang_locale'] = 'pt_PT';
$txt['lang_paypal'] = 'PT';
$txt['lang_dictionary'] = 'pt';
$txt['lang_spelling'] = 'português';

// Character set and right to left?
$txt['lang_rtl'] = false;

// Number formats?
$txt['number_format'] = '1,234.00';
$txt['time_format'] = '%B %@, %Y, %I:%M %p';
$txt['time_format_this_year'] = '%B %@, %I:%M %p';

// %@ is a special format that adds a suffix to a day (1-31), e.g. 1st, 2nd...
// If your language doesn't have any prefixes/suffixes it could use, just set it to $txt['day_suffix'] = '%s';
$txt['day_suffix'] = '%s';
/*$txt['day_suffix'] = array(
	'n' => '%sth',
	1 => '1st',
	2 => '2nd',
	3 => '3rd',
	21 => '21st',
	22 => '22nd',
	23 => '23rd',
	31 => '31st',
);*/

$txt['just_now'] = 'agora mesmo';
$txt['seconds_ago'] = 'há {time} segundos atrás';
$txt['minutes_ago'] = 'há {time} minutos atrás';
$txt['hours_ago'] = 'há {time} horas atrás';
$txt['days_ago'] = 'há {time} dias atrás';
$txt['months_ago'] = 'há {time} meses atrás';
$txt['years_ago'] = 'há {time} anos atrás';

$txt['page_indicator'] = ' - página %s'; // can be turned into an array as needed (1 => '', 'n' => ...)

$txt['days'] = array('Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo');
$txt['days_short'] = array('Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
$txt['months_short'] = array(1 => 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

$txt['admin'] = 'Admin';
$txt['moderate'] = 'Moderar';

$txt['save'] = 'Guardar';
$txt['modify'] = 'Modificar';

$txt['members'] = 'Membros';
$txt['board_name'] = 'Nome do fórum';

$txt['member_postcount'] = 'Mensagens';
$txt['no_subject'] = '(Sem assunto)';
$txt['view_profile'] = 'Visualizar perfil';
$txt['guest_title'] = 'Visitante';
$txt['author'] = 'Autor';
//Dúvida
$txt['on_date'] = 'no %1$s';
$txt['remove'] = 'Remover';
$txt['start_new_topic'] = 'Abrir um novo tópico';

$txt['login'] = 'Autenticar';
// Use numeric entities in the below string.
$txt['username'] = 'Utilizador';
$txt['password'] = 'Palavra-passe';
$txt['username_or_email'] = 'Utilizador ou Email';

$txt['board_moderator'] = 'Moderação do fórum';
$txt['remove_topic'] = 'Remover tópico';
$txt['modify_msg'] = 'Modificar mensagem';
$txt['name'] = 'Nome';
$txt['email'] = 'Email';
$txt['subject'] = 'Assunto';
$txt['message'] = 'Mensagem';
//Dúvida
$txt['quick_modify'] = 'Modificar sentido';

$txt['posts'] = 'Posts';
$txt['topics'] = 'Tópico';
$txt['redirects'] = 'Redirecionamento';
$txt['replies'] = 'Respostas';
$txt['views'] = 'Visualizações';

$txt['num_posts'] = array(0 => 'Sem posts', 1 => '1 post', 'n' => '%s posts');
$txt['num_topics'] = array(0 => 'Sem tópicos', 1 => '1 tópico', 'n' => '%s tópicos');
$txt['num_redirects'] = array(0 => 'Sem redirecionamentos', 1 => '1 redirecionamento', 'n' => '%s redirecionamentos');
$txt['num_replies'] = array(0 => 'Sem respostas', 1 => '1 resposta', 'n' => '%s respostas');
$txt['num_views'] = array(0 => 'Sem visualizações', 1 => '1 visualização', 'n' => '%s visualizações');

// Likes. What you've done implied past tense, while when you haven't liked it thus far, implies a present tense for everyone else.
$txt['you_like_this'] = array(
	0 => 'Tu gostas disto.',
	1 => 'Tu e outra pessoa gostam disto.',
	'n' => 'Tu e outras %1$s pessoas gostam disto.',
);
$txt['like_this'] = array(
	1 => '1 pessoa gosta disto.',
	'n' => '%1$s pessaos gostam disto.',
);
$txt['like'] = 'Gosto';
$txt['unlike'] = 'Não gosto';

$txt['nobody_likes_this'] = 'Ninguém gosta disto.';
$txt['likes_header'] = array(1 => '1 pessoa gosta disto.', 'n' => '%s pessoas gostam disto.');

$txt['choose_pass'] = 'Escolha a palavra-passe';
$txt['verify_pass'] = 'Verifique a palavra-passe';
$txt['position'] = 'Posição';

$txt['total'] = 'Total';
$txt['posts_made'] = 'Posts';
$txt['website'] = 'Website';
$txt['register'] = 'Registar';
$txt['warning_status'] = 'Estatísticas de aviso';
$txt['user_warn_warned'] = 'Utilizador foi avisado';
$txt['user_warn_moderate'] = 'Posts de utilizador em espera de aprovação';
$txt['user_warn_mute'] = 'Utilizador está banido de postar';
$txt['user_warn_soft_ban'] = 'Utilizador está soft-banned';
$txt['user_warn_hard_ban'] = 'Utilizador está hard-banned';
$txt['warn_warned'] = 'Avisado';
$txt['warn_moderate'] = 'Moderado';
$txt['warn_mute'] = 'Silenciado';
$txt['warn_soft_ban'] = '(Soft) Banned';
$txt['warn_hard_ban'] = '(Hard) Banned';

// User menu strings
$txt['usermenu_profile'] = 'Perfil';
$txt['usermenu_profile_desc'] = 'Visualizar perfil de utilizador';
$txt['usermenu_website'] = 'Website';
$txt['usermenu_website_desc'] = 'Ir para website do utilizador';
$txt['usermenu_sendpm'] = 'Mesagem';
$txt['usermenu_sendpm_desc'] = 'Enviar mensagem pessoal ao utilizador';
$txt['usermenu_showposts'] = 'Ver posts';
$txt['usermenu_showposts_desc'] = 'Visualizar últimas contribuições do utilizador';
$txt['usermenu_addbuddy'] = '+ Contactos';
$txt['usermenu_addbuddy_desc'] = 'Adicionar utilizador aos meus contactos';
$txt['usermenu_removebuddy'] = '- Contactos';
$txt['usermenu_removebuddy_desc'] = 'Remover utilizador dos meus contactos';
$txt['usermenu_ignore'] = 'Ignorar';
$txt['usermenu_ignore_desc'] = 'Ignorar este utilizador';
//Dúvida
$txt['usermenu_unignore'] = 'Unignore';
$txt['usermenu_unignore_desc'] = 'Unignore this user';
$txt['usermenu_seeip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_seeip_desc'] = 'Postado deste endereço de IP';
$txt['usermenu_trackip'] = '<span style="color: #aaa">IP: %2%</span>';
$txt['usermenu_trackip_desc'] = 'Acompanhar este endereço de IP';

// Action menu strings (per post)
$txt['acme_like'] = 'Gosto';
$txt['acme_like_desc'] = 'gosto deste post';
$txt['acme_unlike'] = 'Não gosto';
$txt['acme_unlike_desc'] = 'Não gosto deste post';
$txt['acme_quote'] = 'Citar';
$txt['acme_quote_desc'] = 'Responder a este post';
$txt['acme_modify'] = 'Modificar';
$txt['acme_modify_desc'] = 'Editar este post';
$txt['acme_report'] = 'Reportar';
$txt['acme_report_desc'] = 'Reportar este post a um moderador';
$txt['acme_restore'] = 'Restaurar';
$txt['acme_restore_desc'] = 'Restaurar a visibilidade deste post';
$txt['acme_merge'] = 'Juntar';
$txt['acme_merge_desc'] = 'juntar este post com o anterior';
$txt['acme_split'] = 'Separar';
$txt['acme_split_desc'] = 'Separar este tópico num novo';
$txt['acme_remove'] = 'Apagar';
$txt['acme_remove_desc'] = 'Apagar este post definitivamente';
$txt['acme_approve'] = 'Aprovado';
$txt['acme_approve_desc'] = 'Permitir que este post seja visualizador por outros';
$txt['acme_warn'] = 'Aviso';
$txt['acme_warn_desc'] = 'Criar um aviso para este post';

$txt['actions_button'] = 'Actions&hellip;';
$txt['more_actions'] = 'More&hellip;';

$txt['board_index'] = 'Índice do Fórum';
$txt['message_index'] = 'Índice de Mensagens';
$txt['news'] = 'Novidades';
$txt['home'] = 'Home';
$txt['community'] = 'Comunidade';

$txt['lock_unlock'] = 'Fechar/Abrir Tópico';
$txt['post'] = 'Post';
$txt['error_occurred'] = 'Ocurreu um erro!';
$txt['logout'] = 'Sair';
$txt['started_by'] = 'Iniciado por';
$txt['last_post_author_link_time'] = '<strong>Último post</strong> por {author} em {link} {time}';
$txt['last_post_time_author'] = '{time} por {author}';
$txt['board_off_limits'] = 'Este fórum encontra-se fora dos limites.';

$txt['last_post'] = 'Último post';
// Use numeric entities in the below string.
$txt['topic'] = 'Tópico';
$txt['help'] = 'Ajuda';
$txt['notify'] = 'Notificar';
$txt['unnotify'] = 'Não notificar';
$txt['notify_request'] = 'Deseja receber um email sempre que alguém responde a este tópico?';

$txt['move_topic'] = 'Mover tópico';
$txt['move_to'] = 'Mover para';
$txt['pages'] = 'Páginas';
$txt['users_active'] = 'Utilizadores ativos nos últimos %1$d minutos';
$txt['personal_messages'] = 'Mensagens pessoais';

$txt['quote_from'] = 'Citado por';
//Dúvida
$txt['quote'] = 'Citar';
//Dúvida
$txt['quote_noun'] = 'Citar';
$txt['reply'] = 'Responder';
//Dúvida
$txt['reply_number'] = 'Resposta #<strong>%1$d</strong>';

$txt['approve'] = 'Aprovado';
$txt['approve_all'] = 'aprovar tudo';
$txt['awaiting_approval'] = 'À espera de aprovação';
$txt['post_awaiting_approval'] = 'Nota: Esta mensagem encontra-se em espera por moderação.';
$txt['there_are_unapproved_topics'] = 'Existem %1$s tópicos e %2$s posts à espera de aprovação neste fórum. Clique <a href="%3$s">aqui</a> para os ver a todos.';

$txt['msg_alert_none'] = 'Sem mensagens...';
// SSI - The {new} construct is used to add the (x new) area in a language-dependent manner, using unread_pms, as below.
$txt['you_have_msg'] = array(
	0 => 'não tem mensagens',
	1 => 'tem <a href="<URL>?action=pm">1</a> mensagem {new}',
	'n' => 'tem <a href="<URL>?action=pm">%s</a> mensagens {new}',
);
$txt['unread_pms'] = array(0 => '(none new)', 1 => '(1 new)', 'n' => '(%s new)');

$txt['remove_message'] = 'Remover esta mensagem';
$txt['remove_message_confirm'] = 'Remover esta mensagem?';

$txt['online_users'] = 'Utilizadores Online';
$txt['personal_message'] = 'Mensagem pessoal';
$txt['jump_to'] = 'Rápido acesso';
$txt['are_sure_remove_topic'] = 'Tem a certeza que pertende remover este tópico?';

$txt['go'] = 'Ir';
$txt['ok'] = 'OK';
$txt['yes'] = 'Sim';
$txt['no'] = 'Não';

$txt['search'] = 'Procurar';
//Dúvida
$txt['all_pages'] = 'Todas';

$txt['back'] = 'Para trás';
$txt['topic_started'] = 'Tópico iniciado por';
$txt['title'] = 'Título';
$txt['post_by'] = 'Post por';
$txt['welcome_member'] = 'Bem-vindo ao nosso novo membro %1$s.';
$txt['notify_deactivate'] = 'Gostaria de desativar as notificações deste tópico?';

//Dúvida
$txt['last_edit'] = 'Última edição em {date} por {name}';
$txt['last_edit_mine'] = 'Última edição {date}';

$txt['location'] = 'Localização';
$txt['gender'] = 'Género';
$txt['date_registered'] = 'Data de registo';

$txt['recent_posts'] = 'Posts recentes';
$txt['recent_view'] = 'Ver os posts mais recentes do fórum.';

$txt['male'] = 'Masculino';
$txt['female'] = 'Feminino';

$txt['welcome_guest'] = 'Bem-vindo, <strong>%1$s</strong>. Por favor <a href="<URL>?action=login">inicie a sessão</a> ou <a href="<URL>?action=register">registe-se</a>.';
$txt['welcome_guest_noregister'] = 'Bem-vindo, <strong>%1$s</strong>. Por favor <a href="<URL>?action=login">inicie a sessão</a>.';
$txt['login_or_register'] = 'Por favor <a href="<URL>?action=login">inicie a sessão</a> ou <a href="<URL>?action=register">registe-se</a>.';
$txt['please_login'] = 'Por favor <a href="<URL>?action=login">inicie a sessão</a>.';
$txt['welcome_guest_activate'] = '<br>Não recebeu o <a href="<URL>?action=activate">email de ativação</a>?';
$txt['hello_member'] = 'Olá,';
$txt['hello_guest'] = 'Bem-vindo,';
$txt['select_destination'] = 'Selecione destino';

$txt['posted_by'] = 'Postado por';

$txt['moderator'] = 'Moderador';
$txt['moderators'] = 'Moderadores';

// For the Short form, use '!' in case your language's 'New' is too long.
$txt['new'] = 'Novo';
//Dúvida
$txt['new_short'] = 'Novo';

$txt['edited'] = 'Editado';

// Can be used in a title parameter, so stick to alphanumeric characters.
$txt['new_posts'] = 'Novos Posts';
$txt['old_posts'] = 'Não há novos Posts';

$txt['forgot_your_password'] = 'Esqueceu a sua palavra-passe?';

$txt['date'] = 'Data';
$txt['from'] = 'De';
$txt['to'] = 'Para';

$txt['members_title'] = 'Membros';

$txt['redirect_board'] = 'Redirecionar fórum';

$txt['notification'] = 'Notificação';

$txt['your_ban'] = 'Desculpa %1$s, foste banido de utilizar este fórum!<br>%2$s';
$txt['your_ban_expires'] = 'A exclusão será levantada a %1$s.';
$txt['your_ban_expires_never'] = 'A exclusão não será levantada.';
$txt['ban_continue_browse'] = 'Pode continuar a navegar no fórum como visitante.';

$txt['mark_board_read'] = 'Marcar tópicos como lidos neste fórum';
$txt['mark_as_read'] = 'Marcar TODAS as mensagens como lidas';

$txt['legend'] = 'Legenda';
$txt['locked_topic'] = 'Tópico Fechado';
$txt['normal_topic'] = 'Tópico Normal';
$txt['participation_caption'] = 'Tópico onde postou';

$txt['print'] = 'Imprimir';
$txt['profile'] = 'Perfil';
$txt['not_applicable'] = 'N/A';
$txt['preview'] = 'Pré-visualizar';
$txt['remove_draft'] = 'Remover rascunho';
$txt['ip'] = 'IP';
$txt['by'] = 'por';
$txt['days_word'] = 'dias';
$txt['search_for'] = 'Procurar por';
$txt['maintain_mode_on'] = 'Lembre-se, este fórum encontra-se em \'Modo de Manutenção\'.';

$txt['forum_stats'] = 'Estatísticas do Fórum';
$txt['board_stats'] = 'Estatísticas do Fórum';
$txt['blog_stats'] = 'Estatísticas do Blog';
$txt['topic_stats'] = 'Estatísticas dos Tópicos';

$txt['latest_member'] = 'Último Membro';
$txt['latest_post'] = 'Último Post';

$txt['youve_got_pms'] = array(0 => 'Não tem mensagens...', 1 => 'Tem 1 mensagem...', 'n' => 'Tem %s mensagens...');
$txt['click_to_view_them'] = 'Clique <a href="%1$s">haqui</a> para as ler.';

$txt['print_page'] = 'Imprimir Página';

$txt['info_center_title'] = 'Centro de Informação';

$txt['send_topic'] = 'Enviar este tópico';

$txt['check_all'] = 'Marcar tudo';

$txt['file'] = 'Ficheiro';

$txt['today'] = '<strong>Hoje</strong> hás ';
$txt['yesterday'] = '<strong>Ontem</strong> hás ';
$txt['new_poll'] = 'Nova votação';
$txt['poll_vote'] = 'Submeter voto';
$txt['poll_total_voters'] = 'Total de votos de membros';
$txt['poll_results'] = 'Ver resultados';
$txt['poll_lock'] = 'Fechar votação';
$txt['poll_unlock'] = 'Abrir votação';
$txt['poll_edit'] = 'Editar votação';
$txt['poll'] = 'Votação';
$txt['poll_voters_guests_only'] = array(
	1 => '1 visitante',
	'n' => '%1$s visitantes',
);
$txt['poll_voters'] = array(
	1 => 'e 1 visitante',
	'n' => 'e %1$s visitantes',
);
$txt['poll_visibility_admin'] = 'Apenas administradores do fórum poderam ver no que votou.';
$txt['poll_visibility_creator'] = 'Os administradores do fórum, e o criador da votação, podem ver no que votou.';
$txt['poll_visibility_members'] = 'Qualquer membro registado pode ver no que votou.';
$txt['poll_visibility_anyone'] = 'Qualquer utilizador, até mesmo visitantes, podem ver no que votou.';
$txt['one_day'] = '1 Dia';
$txt['one_week'] = '1 Semana';
$txt['one_month'] = '1 Mês';
$txt['forever'] = 'Para sempre';
$txt['quick_login_desc'] = 'Login with username, password and session length';
$txt['one_hour'] = '1 Hora';
$txt['board'] = 'Fórum';
$txt['in'] = 'em';
$txt['pinned_topic'] = 'Tópico fixo';

$txt['delete'] = 'Apagar';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Mais estatísticas]';

$txt['code'] = 'Código';
$txt['code_select'] = '[Seleção]';

$txt['merge'] = 'Emergir tópicos';
$txt['new_topic'] = 'Novo Tópico';

$txt['set_pin'] = 'Fixar tópico';
$txt['set_unpin'] = 'Tirar fixo ao tópico';
$txt['set_lock'] = 'Fechar tópico';
$txt['set_unlock'] = 'Abrir tópico';
$txt['order_pinned_topic'] = 'Reordernar fixos';

$txt['page_created'] = 'Página criada em ';
$txt['seconds_with_query'] = '%1$.2f segundos com 1 pedido.';
$txt['seconds_with_queries'] = '%1$.2f segundos com %2$d pedidos.';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Mensagem Pessoal (Online)';
$txt['pm_offline'] = 'Mensagem Pessoal(Offline)';
$txt['online_status'] = 'Estado';

$txt['go_up'] = 'Subir';
$txt['go_down'] = 'Descer';

$txt['site_credits'] = 'Sobre o Website';
$txt['copyright'] = 'Desenvolvido por <a href="http://wedge.org/" target="_blank" class="new_win">Wedge</a>';
$txt['dynamic_replacements'] = '<abbr title="Dynamic Replacements">DR</abbr>';

$txt['template_block_error'] = 'Incapaz de encontar o bloco "%1$s" do modelo.';
$txt['theme_template_error'] = 'Incapaz de carregar o "%1$s" modelo.';
$txt['theme_language_error'] = 'incapaz de carregar o ficheiro "%1$s" da língua.';

$txt['sub_boards'] = 'Sub-Fórum';

$txt['smtp_no_connect'] = 'Não foi possivel ligar-se ao anfitrião SMTP';
$txt['smtp_port_ssl'] = 'Porta SMTP incorreta; deve de ser a porta 465 para servidores SSL.';
$txt['smtp_bad_response'] = 'Não foi possivel receber uma resposta do servidor de email';
$txt['smtp_error'] = 'Problemas ao enviar mail, erro: ';

$txt['mlist_search'] = 'Procurar por membros';
$txt['mlist_search_again'] = 'Procurar outra vez';
$txt['mlist_search_email'] = 'Procurar por endereço de email';
$txt['mlist_search_group'] = 'Procurar por posição';
$txt['mlist_search_name'] = 'Procurar por nome';
$txt['mlist_search_website'] = 'Procurar por website';
$txt['mlist_search_results'] = 'Procurar resultados para';
//Dúvida
$txt['mlist_search_by'] = 'Procurar por %1$s';
$txt['mlist_menu_view'] = 'Ver lista de membros';

$txt['attach_downloaded'] = array(1 => 'descarregado uma vez.', 'n' => 'descarregado %s vezes.');
$txt['attach_viewed'] = array(1 => 'visto uma vez.', 'n' => 'visto %s vezes.');

$txt['settings'] = 'Definições';
$txt['never'] = 'Nunca';
$txt['more'] = 'mais';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Desculpa %1$s, foste banido de postar neste fórum.';
$txt['you_are_pm_banned'] = 'Desculpa %1$s, foste banido de enviar mensagens privadas neste fórum.';
$txt['you_are_post_pm_banned'] = 'Desculpa %1$s, foste banido de postar e de enviar mensagens privadas neste fórum.';

$txt['add_poll'] = 'Adicionar votação';
$txt['poll_options6'] = 'Só pode selecionar até %1$s opções.';
$txt['poll_remove'] = 'Remover votação';
$txt['poll_remove_warn'] = 'Tem a certeza que pretende remover esta votação do tópico?';
$txt['poll_results_expire'] = 'Resultados exibidos quando a votação terminar';
$txt['poll_expires_on'] = 'Votação concluí';
$txt['poll_expired_on'] = 'Votação concluída';
$txt['poll_change_vote'] = 'Remover voto';
$txt['poll_return_vote'] = 'Opções de votação';
$txt['poll_cannot_see'] = 'YNão pode visualizar a votação neste momento.';

$txt['quick_mod_approve'] = 'Aprovar selecionados';
$txt['quick_mod_remove'] = 'Remover selecionados';
$txt['quick_mod_lock'] = 'Fechar/Abrir selecionados';
$txt['quick_mod_pin'] = 'Fixar/Não fixar selecionados';
$txt['quick_mod_move'] = 'Mover selecionados para';
$txt['quick_mod_merge'] = 'Juntar selecionados';
$txt['quick_mod_markread'] = 'Marcar selecionados como lidos';
//Dúvida
$txt['quick_mod_go'] = 'Ir!';

$txt['generic_confirm_request'] = 'Tem a certeza que pretende fazer isto?';

$txt['reagree_reply'] = 'Os termos de utilização do site sofreram alterações. Antes de poder continuar a postar neste site, terá de aceitar novamente os termos. Poderá faze-lo visitando <a href="%1$s">esta página</a>.';
$txt['quick_reply'] = 'Resposta rápida';
$txt['quick_reply_desc'] = 'Com a opção <em>Resposta Rápida</em> pode escrever uma resposta sem ter de recarregar a página. YPode ainda utilizar smileys e bbcode como numa resposta normal.';
$txt['quick_reply_warning'] = 'Atenção: este tópico encontra-se fechado! Apenas moderadores e Administradores podem responder.';
$txt['quick_reply_verification'] = 'Depois de submeter o seu post irá ser redirecionado para a página onde poderá visualizar o seu post %1$s.';
$txt['quick_reply_verification_guests'] = '(cecessário para todos os visitantes)';
$txt['quick_reply_verification_posts'] = '(necessário para todos os utilizadores com menos de %1$d posts)';
$txt['wait_for_approval'] = 'Nota: Este post não irá ser visto enquanto não for aprovado por um moderador.';

$txt['notification_enable_board'] = 'Tem a certeza que pretende ativar as notificações de novos tópicos para este fórum?';
$txt['notification_disable_board'] = 'Tem a certeza que pretende desativar as notificações de novos tópicos para este fórum?';
$txt['notification_enable_topic'] = 'Tem a certeza que pretende ativar as notificações de novas respostas para este tópico?';
$txt['notification_disable_topic'] = 'Tem a certeza que pretende desativar as notificações de novas respostas para este tópico?';

$txt['report_to_mod'] = 'Reportar este post a um moderador';

$txt['unread_topics'] = 'Tópicos não lidos';
$txt['unread_replies'] = 'Tópicos atualizados';

$txt['who_title'] = 'Quem está online';
$txt['who_and'] = ' e ';
$txt['who_viewing_topic'] = ' estão a visualizar este tópico.';
$txt['who_viewing_board'] = ' estão a visualizar este forum.';
$txt['who_member'] = 'Membro';

// Feed block
$txt['feed'] = 'Feed dos últimos posts';
$txt['feed_current_topic'] = 'Este tópico:';
$txt['feed_current_board'] = 'Este fórum:';
$txt['feed_current_blog'] = 'Este blog:';
$txt['feed_everywhere'] = 'Todo o fórum:';
$txt['feed_posts'] = '<a href="%1$s">posts</a>';
$txt['feed_topics'] = '<a href="%1$s">tópicos</a>';

// Footer strings
$txt['valid_html5'] = 'HTML5 válido!';
$txt['html5'] = 'HTML5';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Utilizador';
$txt['users'] = 'Utilizadores';
$txt['hidden'] = 'Oculto';

$txt['buddy'] = 'Contato';
$txt['buddies'] = 'Contatos';
$txt['contacts_friends'] = 'Amigos';
$txt['contacts_known'] = 'Conhecidos';
$txt['contacts_work'] = 'Colegas';
$txt['contacts_family'] = 'Familia';
$txt['contacts_follow'] = 'Seguidos';
$txt['contacts_restrict'] = 'Restrigidos';
$txt['contacts_custom'] = '<em>Nova lista</em>';
$txt['is_buddy'] = 'Está na minha lista de contatos';
$txt['is_not_buddy'] = 'Não está na minha lista de contatost';

$txt['most_online_ever'] = 'Recorde de utilizadores online';
$txt['most_online_today'] = 'Maior número de utilizadores online hoje';

$txt['response_prefix'] = 'Re: ';

$txt['approve_members_waiting'] = array(
	1 => 'Existe <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">um membro</a> à espera de ativação.',
	'n' => 'Existem <a href="<URL>?action=admin;area=viewmembers;sa=browse;type=approve">%s membros</a> à espera de ativação.',
);

$txt['notifyboard_turnon'] = 'Quer receber uma notificação por email quando alguém cria um tópico neste fórum?';
$txt['notifyboard_turnoff'] = 'Tem a certeza que não pretende receber notificações quando alguém cria um tópico neste fórum?';

$txt['show_unread'] = 'Posts por ler';
$txt['show_unread_replies'] = 'Respostas por ler';

$txt['quickmod_delete_selected'] = 'Remover selecionados';

$txt['show_personal_messages'] = 'Recebeu uma ou mais mensagens pessoais.<br><br>Gostaria de abrir uma nova janela para as visualizar?';

$txt['previous_next_back'] = '&laquo; anterior';
$txt['previous_next_forward'] = 'seguinte &raquo;';

$txt['upshrink_description'] = 'Encolher ou expandir este.';

$txt['mark_unread'] = 'Marcar por ler';

$txt['error_while_submitting'] = 'O seguinte erro ou erros ocurreram quando tentou publicar esta mensagem:';
$txt['error_old_topic'] = 'Aviso: Ninguém publicou neste tópico há mais de %1$d dias.<br>Se quiser responder, pondere criar um novo tópico.';

$txt['mark_read_short'] = 'Marcar lidas';

$txt['pm_short'] = 'Minhas mensagens';

$txt['hello_member_ndt'] = 'Olá, <span>%1$s</span>!';

$txt['unapproved_posts'] = 'Posts não aprovados (Tópicos: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Carregando...';

$txt['verification'] = 'Verificação';
$txt['visual_verification_description'] = 'Escreva as letras que vê na imagem';
$txt['visual_verification_sound'] = 'Escute as letras';
$txt['visual_verification_request_new'] = 'Solicitar uma nova imagem';
$txt['visual_verification_hidden'] = 'Deve deixar esta caixa em branco';

// Sub menu labels
$txt['summary'] = 'Sumário';
$txt['account'] = 'Definições de conta';
$txt['forumprofile'] = 'Perfil de fórum';
$txt['change_skin'] = 'Escolha de Skin';
$txt['draft_posts'] = 'Rascunhos de posts';

$txt['skin_default'] = 'Predefinido';
$txt['skin_default_mobile'] = 'Predefinido telemóvel';

$txt['settings_title'] = 'Opções gerais';
$txt['plugin_manager'] = 'Plugins';
$txt['errlog'] = 'Log de erro';
$txt['edit_permissions'] = 'Permissões';
$txt['mc_unapproved_poststopics'] = 'Pots não aprovados';
$txt['mc_reported_posts'] = 'Reportar posts';
$txt['modlog_view'] = 'Log de moderação';
$txt['unapproved_members'] = 'Membros não aprovados';

$txt['ignoring_user'] = 'Está a ignorar este utilizador. Clique aqui para ver ou ocultar este post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Tamanho do ficheiro';

$txt['sideshow'] = 'Clique aqui, ou clique com o botão do meio do rato em qualquer área da página, para abrir a barra lateral.';

// Restore topic
$txt['restore_topic'] = 'Restaurar Tópico';
$txt['quick_mod_restore'] = 'Restaurar selecionados';

$txt['autosuggest_delete_item'] = 'Apagar item';

// Ignoring topics
$txt['ignoring_topic'] = 'Está de momento a ignorar este tópico.';
$txt['ignore_topic'] = 'Ignorar';
$txt['unignore_topic'] = 'Não ignorar';

// Site type. (Not used for now. Probably not ever.)
$txt['b_type'] = array('blog' => 'blog', 'forum' => 'fórum', 'media' => 'media', 'site' => 'site');
$txt['b_item'] = array('blog' => 'post', 'forum' => 'tópico', 'media' => 'item', 'site' => 'Artigo');

// Indicates the date of the first post when merging two posts.
$txt['search_date_posted'] = 'Publicado:';

// Spoiler tags. But you're smart, so you don't need me telling.
$txt['spoiler'] = 'Spoiler';
$txt['click_for_spoiler'] = '(clique para mostrar/ocultar)';

$txt['readmore'] = '(%1$d mais caracteres)';
$txt['thoughts'] = 'Pensamentos';
$txt['add_thought'] = '(Clique aqui para enviar um pensamento)';
$txt['no_thoughts'] = 'Nenhum pensamento por agora.';
$txt['thome_edit'] = 'Editar';
$txt['thome_remove'] = 'Apagar';
$txt['thome_reply'] = 'Responder';
$txt['thome_context'] = 'Em contexto';
//Dúvida
$txt['thome_personal'] = 'Posteridade?';
$txt['thome_personal_desc'] = 'Mostrar este pensamento por baixo do meu nome nos tópicos, para a posteridade.';

// Do not use double quotes in the following strings.
$txt['privacy'] = 'Privacidade';
$txt['privacy_default'] = 'Predefinido';
$txt['privacy_public'] = 'Público';
$txt['privacy_members'] = 'Membros';
$txt['privacy_group'] = 'Grupo de membros';
$txt['privacy_list'] = 'Contatos';
$txt['privacy_author'] = 'Só eu';

// Do not use double quotes in the form_* text strings. (Why would you?)
$txt['form_submit'] = 'Submeter';
$txt['form_cancel'] = 'Cancelar';

// Media Gallery
$txt['media_gallery'] = 'Media';
$txt['media_home'] = 'Índice';
$txt['media_unseen'] = 'Por ver';
$txt['media_profile_sum'] = 'Sumário';
$txt['media_view_items'] = 'Ver items';
$txt['media_view_coms'] = 'Ver comentários';
$txt['media_view_votes'] = 'Ver votação';
$txt['media_gotolink'] = 'Detalhes';
$txt['media_zoom'] = 'Zoom';
