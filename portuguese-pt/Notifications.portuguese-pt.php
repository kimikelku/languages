<?php
// Language file for notifications

$txt['notifications'] = 'Notificações';
$txt['notifications_short_unread'] = 'Por ler';
$txt['notifications_short_latest'] = 'Últimas';
$txt['notifications_short_all'] = 'Ver todas';
$txt['notifications_short_settings'] = 'Definições';
$txt['notifications_short_unread_pms'] = 'Por ler';
$txt['notifications_short_inbox'] = 'Caixa de Entrada';
$txt['notifications_short_sent'] = 'Caixa de Saída';
$txt['notifications_short_drafts'] = 'Rascunhos';
$txt['notifications_short_write_pm'] = 'Compor';

$txt['notification_unread_title'] = 'Notificações Por Ler';
$txt['notification_unread_none'] = 'Sem notificações por ler.';
$txt['notification_none'] = 'Sem notificações.';
$txt['notification_disable'] = 'Desativar notificações?';
$txt['notification_profile_desc'] = 'Pode desativar as notificações de notificadores específicos aqui, tenha em atenção que ao dasativar as notificações apenas irá cancelar novas notificações, e manterá as antigas';
$txt['scheduled_task_weNotif::scheduled_prune'] = 'Remover notificações lidas';
$txt['scheduled_task_desc_weNotif::scheduled_prune'] = 'Remover notificações lidas que sejam mais antigas que o número de dias especificado na Administração de &gt; Notificações';
$txt['notification_admin_desc'] = 'Definições das Notificações';
$txt['notifications_prune_days'] = 'Remover notificações mais antigas que (dias)';
$txt['notifications_prune_days_subtext'] = 'Qualquer notificação lida mais antiga que o número de dias especificado será removida da base de dados. Se quiser desativar esta função, desative a marcação de tarefas que se encontra em Administração &gt; Servidor &amp; Manutenção &gt; Marcação de Tarefas';
$txt['notification_email'] = 'Notificar por e-mail?';
$txt['enabled'] = 'Ativado';
$txt['disabled'] = 'Desativado';
$txt['notify_periodically'] = 'Notificar periodicamente';
$txt['notify_instantly'] = 'Notificar prontamente e periodicamente';
$txt['notify_disable'] = 'Não notificar por e-mail';
$txt['notify_period_desc'] = 'O número de dias em que as suas notificações serão enviadas. Todas as suas notificações por ler serão agrupadas e enviadas por e-mail após os dias especificados';
$txt['notify_period'] = 'Notificações Periódicas';
$txt['scheduled_task_weNotif::scheduled_periodical'] = 'Enviar notificações periódicas por e-mail';
$txt['scheduled_task_desc_weNotif::scheduled_periodical'] = 'Enviar todas as notificações periódicas por e-mail a todos os utilizadores com notificações por ler';
$txt['notification_email_periodical_subject'] = '%s, tem %d notificação(ões) por ler!';
$txt['notification_email_periodical_body'] = 'Parece que colecionou um grande número de notificações por ler nos últimos dias, aqui fica um resumo delas. Visite o fórum para as ler!';

$txt['notifier_likes_title'] = 'Gostos de publicações';
$txt['notifier_likes_desc'] = 'Notificá-lo quando uma das suas mensagens recebeu um Gosto.';
$txt['notifier_likes_subject'] = 'Alguém Gostou da sua publicação!';
$txt['notifier_likes_html'] = '<span class="like_button"></span>{MEMBER_LINK} Gostou da sua publicação, "{OBJECT_LINK}"';
$txt['notifier_likes_text'] = '{MEMBER_NAME} Gostou da sua publicação, "{OBJECT_NAME}", que se localiza aqui:

{OBJECT_URL}';

$txt['notifier_likes_thought_title'] = 'Gostos de Pensamentos';
$txt['notifier_likes_thought_desc'] = 'Notificá-lo quando um dos seus Pensamentos recebeu um Gosto.';
$txt['notifier_likes_thought_subject'] = 'Alguém Gostou de um dos teus Pensamentos!';
$txt['notifier_likes_thought_html'] = '<span class="like_button"></span>{MEMBER_LINK} Gostou do seu Pensamento: "{OBJECT_NAME}"';
$txt['notifier_likes_thought_text'] = '{MEMBER_NAME} Gostou do seu Pensamento: "{OBJECT_NAME}"';

$txt['notifier_move_title'] = 'Tópicos Movidos';
$txt['notifier_move_desc'] = 'Receber notificações quando os seus tópicos são movidos';
$txt['notifier_move_subject'] = 'Alguém moveu o seu tópico!';
$txt['notifier_move_noaccess_html']  = '{MEMBER_LINK} moveu o seu tópico {TOPIC_LINK} para um fórum no qual não pode aceder.';
$txt['notifier_move_noaccess_email'] = '{MEMBER_NAME} moveu o seu tópico {TOPIC_NAME} para um fórum no qual não pode aceder.';
$txt['notifier_move_html'] = '{MEMBER_LINK} moveu {TOPIC_LINK} para {BOARD_LINK}.';
$txt['notifier_move_text'] = '{MEMBER_NAME} moveu {TOPIC_NAME} para {BOARD_NAME}. Pode aceder ao fórum aqui:

{BOARD_URL}';

$txt['notif_subs'] = 'Subscrições';
$txt['notif_subs_start_time'] = 'Hora de início';
$txt['notif_unsubscribe'] = 'Anular Subscrição';
$txt['notif_subscribe'] = 'Subscrever';
$txt['notif_subs_desc'] = 'Pode gerir as suas subscrições para vários notificadores aqui, tenha em atenção que se tiver subscrições, de notificadores desativados, não irão ser apresentadas.';

$txt['no_pms'] = 'Não tem mensagens por ler.';
$txt['pm_sent_to_you'] = '%1$s enviou-lhe uma mensagem, "%2$s".';
$txt['pm_replied_to_pm'] = '%1$s respondeu à sua mensagem, "%2$s".';
