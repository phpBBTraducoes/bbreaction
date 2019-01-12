<?php
/**
*
* BBreaction.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 1.2.0] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_BBREACTION'			            => 'BBreaction',
	'ACP_BBREACTION_EXPLAIN'	            => 'Gerencie seus tipos de reação. Escolha por tipo de multivote e/ou porcentagem. Mova para cima e/ou para baixo para pedir seus tipos de reação. Depois que um tipo tiver sido votado, você não poderá excluí-lo até que você desative esse tipo de reação. <br />Excluir um tipo de reação também excluirá todos os votos. Se você deseja manter os votos, simplesmente desative o tipo. Tipos desativados não serão calculados no resultado das estatísticas',
    'ACP_BBREACTION_MANAGE'		            => 'Gerenciar BBreaction',
	
	'BBREACTION_META_DESCRIPTION'			=> 'Conceder usuários com emblemas baseados em regras personalizadas e padrão',
	'BBREACTION_META_DEVELOPERS'			=> 'Desenvolvedores',
	'BBREACTION_META_TASKS_1'				=> 'Torna os espreitadores úteis para algo e dá a eles um meio de interação',
	'BBREACTION_META_TASKS_2'				=> 'Melhora a qualidade dos posts (postadores querem evitar classificações negativas)',
	'BBREACTION_META_TASKS_3'				=> 'Torna fácil obter reações ao post, mas sem o incômodo de escrever um comentário inteiro',
	'BBREACTION_META_TASKS_4'				=> 'Compatível com <a href="http://www.sitesplat.com/phpBB3/marketplace.php">BBAwards</a> extensão que permite prêmios personalizados de emblemas',
	'BBREACTION_META_TASKS_5'				=> 'Botões configuráveis ​​(quantos, que texto, ícones, negativo ou positivo, animação etc)',
	'BBREACTION_META_TASKS_6'				=> 'Muito mais..!',
	
	'ACP_BBREACTION_VERSION'	            => '1.2.0',
	'ACP_BBREACTION'			            => 'BBreaction',
    'ACP_LOADING'			                => 'Aguente. Carregando...',
	'ACP_SIDEBAR_NOTICE_CLOSE'			    => 'Fechar',

	'SITESPLAT_COM'		                    => 'http://sitesplat.com',
	'SITESPLAT_COPY'		                => '&#169; SiteSplat',
	'LICENSE_INFO'		                    => 'Proprietary - SiteSplat All rights reserved',
	'EXTENSION_DEVELOPER'			        => 'Desenvolvedor',
	
	'NOTICE_BBEMOJI'						=> 'A extensão <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=29"><strong>BBeomji</strong></a> não está instalado, você não pode usar os Emojis como reações.',
	'ACP_BBREACTION_DELETE_LOG'				=> 'Tipo de reação excluído',
	'ACP_BBREACTION_ACTIVE_LOG'				=> 'Reação %s is %s',
	'ACP_ACTIVE'							=> 'ativado',
	'ACP_DO_ACTIVATE'						=> 'Ativar',
	'ACP_DEACTIVE'							=> 'desativado',
	'ACP_DO_DEACTIVATE'						=> 'Desativar',
	'ACP_MULTIVOTE'							=> 'Multivoto',
	'ACP_PERCENT'							=> 'Porcentagem / #',
	'ACP_PROGRESSBAR'						=> 'Barra de progresso',
	'ACP_MEMBERLIST_STAT'					=> 'Status',
	'ACP_DISPLAY_TOP'						=> 'Posição do status do tópico',
	'ACP_BBREACTION_SAVE_GENERAL'			=> 'Salvar opções',
	'ACP_BBREACTION_CREATE_TYPE'			=> 'Criar tipo de reação',
	'ACP_BBREACTION_STATISTICS'				=> 'Estatísticas de BBreaction',

	'ACP_BBREACTION_ADD'					=> 'Adicionar tipo de reação',
	'ACP_BBREACTION_EDIT'					=> 'Editar tipo de reação',
	'ACP_BBREACTION_DELETE_CONFIRM'			=> 'Excluir o tipo de reação e tudo o que é votado?',
	'ACP_BBREACTION_NAME'					=> 'Nome da reação',
	'ACP_BBREACTION_NAME_EXPLAIN'			=> 'Dê um nome curto para explicar o tipo dessa reação',
	'ACP_BBREACTION_DESCRIPTION'			=> 'Descrição',
	'ACP_BBREACTION_DESCRIPTION_EXPLAIN'	=> 'Descrição do tipo, apenas para uso interno',
	'ACP_BBREACTION_SYMBOL'					=> 'Ícone de Glyph',
	'ACP_BBREACTION_SYMBOL_EXPLAIN'			=> 'Ícone de Font Awesome glyph no botão de reação. Adicione um segundo parâmetro para a animação do girador. <br />Por exemplo <strong>fa-spin</strong>. Mais informações <a href="https://fortawesome.github.io/Font-Awesome/examples/#animated">Ícones animados</a>',
	'ACP_BBREACTION_NEGATIVE'				=> 'Reação positiva',
	'ACP_BBREACTION_NEGATIVE_EXPLAIN'		=> 'Marque este tipo de reação como Positivo ou Negativo. Positivo terá uma cor verde e negativo terá vermelho.',

	'ACP_BBREACTION_SEPERATOR'				=> 'Separador',
	'ACP_BBREACTION_SEPERATOR_EXPLAIN'		=> 'Desenha uma regra de separação à esquerda desse botão',
	'ACP_BBREACTION_NOTIFY'					=> 'Notificar',
	'ACP_BBREACTION_NOTIFY_EXPLAIN'			=> 'Envia uma notificação para o postador quando há uma nova reação',
	
	'ACP_BBREACTION_NAME_USED'				=> 'Nome já em uso',
	'ACP_BBREACTION_SAVED_LOG'				=> 'Tipo de reação salvo',
	'ACP_BBREACTION_SAVED_LOG'				=> 'Tipo de reação adicionado',
	'ACP_BBREACTION_SUBMIT_SUCCESS'			=> 'Tipo de reação salvo',
	'ACP_BBREACTION_DELETE_SUCCESS'			=> 'Tipo de reação e votos excluídos com sucesso',
	'ACP_BBREACTION_DELETE_LOG'				=> 'Tipo de reação %s e votos excluídos com sucesso',
	
	'ACP_BBREACTION_USED'					=> 'Votado',
	'ACP_REACTIONS'							=> 'BBreaction',
	'ACP_BBREACTION_EMPTY'					=> 'Não há registros de BBreaction',

	'SS_HELPER_NOTY'	                    => 'SiteSplat BBcore não existe!<br />Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'BBREACTION_NOTICE'	                    => '<div style="width:80%;margin:20px auto;"><p>As configurações para esta extensão estão em <strong>%1$s &#187; %2$s &#187; %3$s.</strong><br />Certifique-se de verificar a permissão de grupo e ajustar conforme necessário. As reações padrão têm a notificação do usuário já ativada.</p></div>',

	// BBemoji
	'ACP_BBREACTION_EMOJI'			=> 'BBemoji',
	'ACP_BBREACTION_EMOJI_EXPLAIN'	=> 'Escolha um BBemoji como ícone. Comece digitando:.',
));

?>