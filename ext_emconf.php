<?php

########################################################################
# Extension Manager/Repository config file for ext "t3adminer".
#
# Auto generated 07-08-2011 13:56
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Adminer',
	'description' => 'Database administration tool \'Adminer\'',
	'category' => 'module',
	'author' => 'Jigal van Hemert',
	'author_email' => 'jigal@xs4all.nl',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => 'mod1',
	'doNotLoadInFE' => 1,
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:20:{s:9:"ChangeLog";s:4:"d70f";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"4f78";s:12:"ext_icon.gif";s:4:"147c";s:17:"ext_localconf.php";s:4:"394d";s:14:"ext_tables.php";s:4:"5aff";s:36:"classes/class.tx_t3adminer_hooks.php";s:4:"38a4";s:14:"doc/manual.sxw";s:4:"a5ff";s:19:"doc/wizard_form.dat";s:4:"9829";s:20:"doc/wizard_form.html";s:4:"2c28";s:13:"mod1/conf.php";s:4:"a4f1";s:14:"mod1/index.php";s:4:"4fb7";s:18:"mod1/locallang.xml";s:4:"1a89";s:22:"mod1/locallang_mod.xml";s:4:"0ace";s:19:"mod1/moduleicon.gif";s:4:"147c";s:15:"res/adminer.css";s:4:"643c";s:15:"res/adminer.txt";s:4:"d89c";s:17:"res/t3adminer.php";s:4:"2ffd";s:29:"res/plugins/AdminerFrames.php";s:4:"c609";s:22:"res/plugins/plugin.php";s:4:"9970";}',
	'suggests' => array(
	),
);

?>