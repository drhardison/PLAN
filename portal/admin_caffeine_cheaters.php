<?php
require_once 'include/_universal.php';
$x = new universal(get_lang('plural'),get_lang('singular'),2);
$x->database('caffeine','userid','');
$x->permissions('update',1);
$x->add_notes('update',get_lang('notes_update'));
$x->add_extra('update',array(array('UPDATE users SET caffeine_mg=0','userid'),array('DELETE FROM caffeine','userid')));

$x->start_elements();
$x->add_selectlist('userid',1,1,0,get_lang('desc_userid'),array('empty' => get_lang('error_userid')),'SELECT username,userid FROM users ORDER BY username','userid','username');

if (empty($_POST) && $x->is_secure()) {
	$x->display_top();
	$x->display_form();
	$x->display_bottom();
} elseif (!empty($_POST) && $x->is_secure()) {
	$x->display_results();
} else {
	$x->display_slim(get_lang('noauth'));
}
?>