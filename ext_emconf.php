<?php

########################################################################
# Extension Manager/Repository config file for ext "t3adminer".
#
# Auto generated 09-06-2011 23:31
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
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:18:{s:9:"ChangeLog";s:4:"8194";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"4f78";s:12:"ext_icon.gif";s:4:"147c";s:14:"ext_tables.php";s:4:"5aff";s:14:"doc/manual.sxw";s:4:"a5ff";s:19:"doc/wizard_form.dat";s:4:"9829";s:20:"doc/wizard_form.html";s:4:"2c28";s:13:"mod1/conf.php";s:4:"a4f1";s:14:"mod1/index.php";s:4:"c785";s:18:"mod1/locallang.xml";s:4:"1a89";s:22:"mod1/locallang_mod.xml";s:4:"0ace";s:19:"mod1/moduleicon.gif";s:4:"147c";s:21:"res/adminer-3.2.2.php";s:4:"136c";s:15:"res/adminer.css";s:4:"3f70";s:17:"res/t3adminer.php";s:4:"bb7a";s:29:"res/plugins/AdminerFrames.php";s:4:"903a";s:22:"res/plugins/plugin.php";s:4:"9970";}',
	'suggests' => array(
	),
);

?>