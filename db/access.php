<?php
//
$capabilities = array(	
	// Permisos de ver el bloque y la información relacionada
	'block/nsreas:view' => array(
			'captype' => 'read',
			'contextlevel' => CONTEXT_SYSTEM, //Es del sistema por que s�lo el Admin deber� tener acceso
			'archetypes' => array(
					'manager' => CAP_ALLOW,
			),
			'clonepermissionsfrom' => 'moodle/site:manageblocks'
	),
	'block/nsreas:addinstance' => array(
			'captype' => 'read',
			'contextlevel' => CONTEXT_SYSTEM, //Es del sistema por que s�lo el Admin deber� tener acceso
			'archetypes' => array(
					'manager' => CAP_ALLOW,
			),
			'clonepermissionsfrom' => 'moodle/site:manageblocks'
	),
	'block/nsreas:viewincourse' => array(
			'captype' => 'read',
			'contextlevel' => CONTEXT_COURSE, //Es del sistema por que s�lo el Admin deber� tener acceso
			'archetypes' => array(
					'manager' => CAP_ALLOW,
			),
			'clonepermissionsfrom' => 'moodle/site:manageblocks'
	),	
);