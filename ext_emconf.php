<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Workspaces: Boost',
	'description' => 'Performance boost by SQL indices',
	'category' => 'system',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'author' => 'Philipp Kitzberger',
	'author_email' => 'philipp@kitze.net',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '8.7.0-',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
