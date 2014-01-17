<?php
// Version: 2.0; Stats

$txt['stats_center'] = 'Centro de estatísticas';
$txt['general_stats'] = 'Estatísticas gerais';

// This is where we list all possible filter permutations for statistics. An empty line means a separator.
$txt['charts'] = array(
	'publicações,tópicos,registos,most_on' => 'Tudo|Exceto visitas de página',
	'tópicos,registos,most_on' => 'Tudo|Exceto visitas e publicações',
	'',
	'posts,hits' => 'Novas publicações &amp; visitas de página',
	'posts,topics' => 'Novas publicações &amp; Tópicos',
	'',
	'topics' => 'Novos tópcios',
	'posts' => 'Novas publicações',
	'registers' => 'Novos Membros',
	'most_on' => 'Mais online',
	'hits' => 'Visitas de página',
);

$txt['group_monthly'] = 'Estatísticas mensais';
$txt['group_daily'] = 'Estatísticas diárias';
$txt['lifetime'] = 'Tudo';
$txt['last_month'] = 'Últimos 31 dias';
$txt['last_year'] = 'Últimos 12 meses';
$txt['stat_sum'] = 'Soma:';
$txt['stat_average'] = 'Média:';

$txt['date_format'] = '%B %@, %Y';
$txt['date_format_this_year'] = '%B %@';

$txt['top_posters'] = 'Top 10 publicadores';
$txt['top_boards'] = 'Top 10 Fóruns';
$txt['forum_history'] = 'Histórico do fórum (usando o horário do fórum)';
$txt['stats_date'] = 'Date (yyyy/mm/dd)';
$txt['top_topics_replies'] = 'Top 10 Tópicos (por respostas)';
$txt['top_topics_views'] = 'Top 10 Tópicos (por visualizações)';
$txt['top_liked'] = 'Top gostos de publicações';
$txt['top_liked_posters'] = 'Top gostos de utilizadores';
$txt['top_starters'] = 'Top criadores de tópicos';
$txt['most_time_online'] = 'Mais tempo Online';
//Dúvida
$txt['stats_more_detailed'] = 'mais detalhado &raquo;';

$txt['average_registers'] = 'Média de registos por dia';
$txt['average_posts'] = 'Média de publicações por dia';
$txt['average_topics'] = 'Média de tópcios por dia';
$txt['average_most_on'] = 'Média de online por dia';
$txt['users_online'] = 'Utilizadores Online';
$txt['gender_ratio'] = 'Rácio de Masculino/Feminino';
$txt['users_online_today'] = 'Hoje Online';
$txt['num_hits'] = 'Total de visualizações de páginas';
$txt['average_hits'] = 'Média de visualizações diárias por dia';

$txt['ssi_comment'] = 'comentário';
$txt['ssi_comments'] = 'comentários';
$txt['ssi_write_comment'] = 'Escrever comentário';
$txt['ssi_no_guests'] = 'Não pode especificar um fórum que não permite visitantes. Por favor verifique o ID do fórum antes de tentar de novo.';
$txt['xml_feed_desc'] = 'Informações em direto de {forum_name}';

$txt['total_registers'] = 'Total de Membros';
$txt['total_posts'] = 'Total de Publicações';
$txt['total_topics'] = 'Total de Tópicos';
$txt['total_boards'] = 'Total de fóruns';
$txt['total_cats'] = 'Total de Categorias';

$txt['totalTimeLogged_d_short'] = 'd ';
$txt['totalTimeLogged_h_short'] = 'h ';
$txt['totalTimeLogged_m_short'] = 'm';

// Debug related stats - when $db_show_debug is true.
$txt['debug_report'] = '
	<strong>Templates</strong> (%1$d): <em>%2$s</em>.
	<strong>Blocks</strong> (%3$d): <a href="#" onclick="%11$s">lista</a><span class="hide"><em>%4$s</em></span>.
	<strong>Ficheiros de Línguas</strong> (%5$d): <a href="#" onclick="%11$s">lista</a><span class="hide"><em>%6$s</em></span>.
	<strong>Sheets de estilo</strong> (%7$d): <a href="#" onclick="%11$s">list</a><span class="hide"><em>%8$s</em></span>.
	<strong>Ficheiros incluídos</strong> (%9$d): %10$sKB - <a href="#" onclick="%11$s">list</a><span class="hide"><em>%12$s</em></span>.
	<strong>Pico de memória utilizada</strong>: %13$dKB.';
$txt['debug_cache_hits'] = '
	<strong>Cache hits</strong> (%1$d): %2$ss for %3$s bytes - <a href="#" onclick="%4$s">list</a><span class="hide"><em>%5$s</em></span>.';
$txt['debug_cache_seconds_bytes'] = '%1$s %2$ss - %3$s bytes';
$txt['debug_queries_used'] = '<strong>Queries usados</strong>: %1$d';
$txt['debug_queries_used_and_warnings'] = '<strong>Queries usados</strong>: %1$d, %2$d avisos';
$txt['debug_query_in_line'] = 'em <em>%1$s</em> linha <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'que levou %1$s segundos.';
$txt['debug_query_which_took_at'] = 'levou %1$s segundos a %2$s pelo pedido.';
$txt['debug_show_queries'] = '<strong>Expandir Queries</strong>';
$txt['debug_hide_queries'] = '<strong>Ocultar Queries</strong>';
