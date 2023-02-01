<?php
if(!defined('ABSPATH')) exit;

define('KBOARD_snu_clothing_menber_VERSION', '1.6');

load_plugin_textdomain('kboard-snu-clothing-menber', false, dirname(plugin_basename(__FILE__)) . '/languages');

if(!function_exists('kboard_snu_clothing_menber_scripts')){
	add_action('wp_enqueue_scripts', 'kboard_snu_clothing_menber_scripts', 999);
	add_action('kboard_iframe_head', 'kboard_snu_clothing_menber_scripts');
	function kboard_snu_clothing_menber_scripts(){
		$localize = array(
			'missing_link_address' => __('Missing link address.', 'kboard-snu-clothing-menber'),
			'no_more_data' => __('There is no more data to display.', 'kboard-snu-clothing-menber'),
		);
		wp_localize_script('kboard-script', 'kboard_snu_clothing_menber_localize_strings', $localize);
	}
}

if(!function_exists('kboard_snu_clothing_menber_more_view')){
	add_action('init', 'kboard_snu_clothing_menber_more_view');
	function kboard_snu_clothing_menber_more_view(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		$board_id = isset($_GET['board_id'])?intval($_GET['board_id']):'';
		
		if(!$board_id){
			$board_id = isset($_GET['kboard_id'])?intval($_GET['kboard_id']):'';
		}
	
		if($action == 'kboard_snu_clothing_menber_more_view' && $board_id){
			echo kboard_builder(array('id'=>$board_id));
			exit;
		}
	}
}

if(!function_exists('kboard_snu_clothing_menber_shortcusts')){
	add_action('wp_ajax_kboard_snu_clothing_menber_shortcusts', 'kboard_snu_clothing_menber_shortcusts');
	add_action('wp_ajax_nopriv_kboard_snu_clothing_menber_shortcusts', 'kboard_snu_clothing_menber_shortcusts');
	function kboard_snu_clothing_menber_shortcusts(){
		$content_uid = isset($_POST['content_uid'])?intval($_POST['content_uid']):'';
		if($content_uid){
			$content = new KBContent();
			$content->initWithUID($content_uid);
			$content->increaseView();
		}
		exit;
	}
}

if(!function_exists('kboard_snu_clothing_menber_print')){
	function kboard_snu_clothing_menber_print($link){
		if(strpos($link, 'http://') !== false || strpos($link, 'https://') !== false){
			return $link;
		}
		return "http://{$link}";
	}
}