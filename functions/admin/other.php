<?php
function cpln_other_settings_desc() {
    echo '<p>Test</p>';
}

function cpln_redirect_timer_bool_output($args) {
	$options = get_option('cpln_other_settings');
	
	$html = '<input type="checkbox" name="cpln_other_settings[cpln_redirect_timer_bool]" value="1"';
	if(isset($options['cpln_redirect_timer_bool'])){
		$html .= 'checked="checked"';
	}
	$html .= '/>';
	echo $html;
}

function cpln_redirect_time_output($args) {
	//todo: improve UI
	$options = get_option('cpln_other_settings');
	echo '<input name="cpln_other_settings[cpln_redirect_time]" value="'.$options['cpln_redirect_time'].'" />';
}