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
	'BBREACTION'						=> 'BBreaction',
	'BBREACTION_TOP_LIST'				=> 'Lista de reações',
	'BBREACTION_OTHERS'				    => 'Outros?',
	
	'BBREACTION_WHAT'					=> 'Qual é a sua reação',
	'BBREACTION_MODE_ERROR'				=> 'O modo não existe',
	'BBREACTION_POST_ERROR'				=> 'Post não existe',
	'BBREACTION_POST_NO_AUTH'			=> 'Você não está autorizado a reagir a este post.',
	'BBREACTION_OWN_POST_ERROR'			=> 'Você não pode reagir ao seu próprio post.',
	'BBREACTION_TIME_ERROR'				=> 'Você não pode reagir a um post tão rápido!',
	'BBREACTION_REMOVED'				=> 'Sua reação foi removida',
	'REMOVED'							=> 'removido',
	'BBREACTION_ADDED'					=> 'Sua reação foi salva',
	'ADDED'								=> 'adicionado',
	'INFOMSG'						    => 'Atenção!',
	
	'REACTIONS_POSITIVE'				=> 'Reações positivas',
	'REACTIONS_NEGATIVE'				=> 'Reações negativas',
	
	'REACTIONS_FORUM_OVERVIEW'			=> 'Visão geral do fórum',
	'REACTIONS_TOPIC_OVERVIEW'			=> 'Visão geral do tópico',
	'REACTIONS_POSTS_OVERVIEW'			=> 'Visão geral da mensagem',
	'REACTIONS_USER_OVERVIEW'			=> 'Visão geral do usuário',
	
	'BBREACTION_GIVVEN'					=> 'Dado',
	'BBREACTION_RECIEVED'				=> 'Recebido',
	'BBREACTION_NO_RECORDS'				=> 'Nenhuma reação disponível ainda',
	'UCP_BBREACTION_EXPLAIN'			=> 'Uma visão geral das reações dadas e recebidas',
	'ACL_U_BBREACTION'					=> 'Pode usar BBreaction',
	
	'NOTIFICATION_TYPE_SITESPLAT.BBREACTION.NOTIFICATION.TYPE.REWARD_ADDED'	=> 'Alguém reagiu ao seu post',
	
	'BBREACTION_NOTI_EVENT_ADDED'		=> '<strong>Atualização BBreaction</strong>:<br />Uma reação foi %1$s ao seu post por %2$s.',
));

?>