<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Extend operations',
	'description' => 'Example extension to extend the extension "operations" (firefighter reports with TYPO3) with own properties in the domain model "operation".',
	'category' => 'plugin',
	'version' => '0.0.1',
	'state' => 'beta',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Karsten Nowak',
	'author_email' => 'captnnowi@gmx.de',
	'author_company' => 'undkonsorten',
    'autoload' => array(
        'psr-4' => array('KN\\ExtendOperations\\' => 'Classes')
    ),
	'constraints' => array (
		'depends' => array (
			'operations' => '2.0',
			'typo3' => '8.7.0 - 8.7.99',
		),
		'conflicts' => array (
		),
		'suggests' => array (
		),
	),
);
