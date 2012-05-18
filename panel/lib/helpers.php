<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

function replace_once($needle, $replace, $haystack) {
  $pos = strpos($haystack, $needle);
  if ($pos === false) return $haystack;
  return substr_replace($haystack, $replace, $pos, strlen($needle));
}  

function ourl($url=false) {
  if(!$url) $url = c::get('url');
  return replace_once('/' . c::get('panel.folder'), '', $url);
}

function showurl($show) {
  global $site;
  return $site->uri->replaceParam('show', $show)->removeParam('do')->toURL(false);
}

function dourl($show, $do) {
  global $site;
  return $site->uri->replaceParam('show', $show)->replaceParam('do', $do)->toURL(false);
}

function growl($status) {
  $error = (error($status)) ? ' error' : '';
  if(!empty($status['msg'])) echo '<div class="growl' . $error . '">' . $status['msg'] . '</div>';
}

function pad($number,$n) {
  return str_pad((int) $number,$n,"0",STR_PAD_LEFT);
}

?>