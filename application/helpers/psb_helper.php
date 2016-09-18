<?php
function format_no_peserta($no){
	$prefix=config_item('psb_prefix_no_peserta');
	$leadingzeros='0000';
	$no_peserta=$prefix.substr($leadingzeros,0,(-strlen($no))).$no;
	return $no_peserta;
}

function get_no_peserta_value($no_peserta){
	return intval(substr($no_peserta,4,4));
}

