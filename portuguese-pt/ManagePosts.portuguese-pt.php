<?php
// Version: 2.0; ManagePosts

// Post Settings
$txt['removeNestedQuotes'] = 'Remover citações anteriores quando a citar';
$txt['enableEmbeddedFlash'] = 'Permitir incorporação em Flash nas publicações';
$txt['enableEmbeddedFlash_warning'] = 'Poderá causar uma falha de segurança!';
$txt['additional_options_collapsable'] = 'Ativar o colapso adicional de definições de publicações';

$txt['max_messageLength'] = 'Tamanho máximo de publicação permitida';
$txt['max_messageLength_zero'] = '0 para indefinido.';
$txt['topicSummaryPosts'] = 'Publicações a mostrar no sumário de tópicos';

$txt['max_image_width'] = 'Largura máxima de imagens publicadas (0 = desativa)';
$txt['max_image_height'] = 'Altura máxima de imagens publicadas (0 = desativa)';

$txt['spamWaitTime'] = 'Tempo necessário entre publicações com o mesmo IP';
$txt['edit_wait_time'] = 'Tempo de espera para edição';
$txt['edit_disable_time'] = 'Tempo máximo para editar uma publicação';
$txt['edit_disable_time_zero'] = '0 para desativar';
$txt['allow_non_mod_edit'] = 'Permitir não moderadores de editar edições de moderadores?';

// Topic Settings
$txt['enableParticipation'] = 'Ativar ícones de participação';

$txt['correctExclamations'] = 'Corrigir elevadas exclamações no assunto';
$txt['correctShouting'] = '% máxima de letras maiúsculas no assunto';

$txt['oldTopicDays'] = 'Tempo definido antes de avisar que a publicação é antiga';
$txt['oldTopicDays_zero'] = '0 para desativar';
$txt['defaultMaxTopics'] = 'Número de tópicos por página na mensagem principal';
$txt['defaultMaxMessages'] = 'Número de publicações por página na página do tópico';

$txt['enableAllMessages'] = 'Tamanho máximo para exibir &quot;Todas&quot; as publicações';
$txt['enableAllMessages_zero'] = '0 para nunca exibir &quot;Todas&quot;';
$txt['disableCustomPerPage'] = 'Desativar opção de contagem por página de tópicos/mensagens definida pelo utilizador';
$txt['enablePreviousNext'] = 'Ativar links de tópico anterior/próximo tópico';

$txt['ignoreMoveVsNew'] = 'Quando mover tópicos, permitir move-los para qualquer fórum por defeito';

// Bulletin Board Code
$txt['enableBBC'] = 'Ativar bulletin board code (BBC)';
$txt['enablePostHTML'] = 'Ativar HTML <em>básico</em> em publicações';
$txt['autoLinkUrls'] = 'Criar hiperligação automaticamente em URLs publicados';

$txt['disabledBBC'] = 'Ativar tags BBC';
$txt['bbcTagsToUse'] = 'Ativar tags BBC';
$txt['bbcTagsToUse_select'] = 'Selecionar as tags permitidas de serem utilizadas';
$txt['bbcTagsToUse_select_all'] = 'Selecionar todas as tags';

// Post Editor
$txt['disable_wysiwyg'] = 'Desativar editor WYSIWYG';
$txt['editorSizes'] = 'Tamanho de fonte a listar no editor';
$txt['editorSizes_subtext'] = 'Uma por linha';
$txt['editorFonts'] = 'Fontes a listar no editor';
$txt['editorFonts_subtext'] = 'Enquanto que pode listar qualquer fonte aqui, e será apresentada no editor principal, apenas funcionará se se encontrar instalada no computador do utilizador.';

// Censored Words
$txt['admin_censored_where'] = 'Insira a palavra a ser censurada na esquerda, e para o que irá ser apresentado na direita.';
$txt['censor_whole_words'] = 'Verificar apenas palavras inteiras';
$txt['censor_case'] = 'Ignorar capitalização quando censorado';
$txt['allow_no_censored'] = 'Permitir aos utilizadores de desativar a censura';

$txt['censor_test'] = 'Testar Palavras Censuradas';
$txt['censor_test_save'] = 'Teste';

// Draft Settings
$txt['masterSavePostDrafts'] = 'Ativar o guardar de rascunhos';
$txt['draftsave_subnote'] = 'Tenha em atenção que o utilizador deve de ainda ter permissões na área de permissões.';
$txt['masterAutoSavePostDrafts'] = 'Ativar a opção de guardar automaticamente os rascunhos';
$txt['draftautosave_subnote'] = 'Isto não irá sobrepor a opção a cima, apenas irá conplementar. O utilizador deve de ter permissões.';
$txt['masterAutoSaveDraftsDelay'] = 'Com que frequência devem de ser salvas as publicações?';
$txt['pruneSaveDrafts'] = 'Após quantos dias devem de ser removidos os tópicos?';

// Merging
$txt['merge_post_header'] = 'Fundir publicações duplicadas';
$txt['merge_post_auto'] = 'Fundir publicações duplicadas automaticamente';
$txt['merge_post_auto_time'] = 'Adiar para quando as publicações já não são fundidas automaticamente.';
$txt['merge_post_auto_time_subtext'] = '(Em segundos; 0 para fundir sempre)';

$txt['merge_post_admin_double_post'] = 'Fundir publicações duplicadas enviadas por Administradores';

$txt['merge_post_no_time'] = 'Não exibir a data de publicações mais antigas antes do separador';
$txt['merge_post_no_sep'] = 'Não exibir nem o separador nem a data de publicações antigas.';
$txt['merge_post_separator'] = 'Separador entre publicações fundidas (ativar a opção a cima.)';
$txt['merge_post_separator_subtext'] = 'Pode usar BBCode. Pode recuperar a data de publicações antigas usando a variável <strong>$date</strong> no campo de texto.<br>Por defeito é [size=1]$date[/size][hr][br]';
$txt['merge_post_custom_separator'] = 'Usar um separador personalisado entre publicações fundidas.';
$txt['merge_post_custom_separator_subtext'] = 'As definições a cima serão desativadas.';

$txt['merge_post_ignore_length'] = 'Ignorar comprimento\' máximo de publicações';
