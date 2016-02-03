<?php 

	require_once('../../config.php');
	require_once('nsreas_form.php');

	$PAGE->set_context(context_system::instance());
	$PAGE->set_url('/blocks/nsreas/index.php');
	$PAGE->requires->jquery();
	$PAGE->requires->jquery_plugin('ui');
	$PAGE->requires->jquery_plugin('ui-css');
	global $CFG;					
	global $DB;		
	print_object($DB);
	$accountform = new nsreas_form();
		echo $OUTPUT->header();

?>	
				<h3>Información adicional del curso</h3>				
	<?php
		$accountform->display();
		echo $OUTPUT->footer();	

