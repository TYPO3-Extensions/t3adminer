<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Jigal van Hemert <jigal@xs4all.nl>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

function adminer_object() {

		// required to run any plugin
	include_once "./plugins/plugin.php";

		// autoloader
	foreach (glob("plugins/*.php") as $filename) {
		include_once "./$filename";
	}

	$plugins = array(
			// specify enabled plugins here
		new AdminerFrames
	);

	class AdminerSoftware extends AdminerPlugin {

		function name() {
			// custom name in title and heading
			return 'T3Adminer';
		}

		function permanentLogin() {
			// key used for permanent login
			return "74b941992ef29727ccabf82889fe837a";
		}

		function credentials() {
			// server, username and password for connecting to database
			return array(
				$_SESSION['ADM_server'], $_SESSION['ADM_user'], $_SESSION['ADM_password']
			);
		}

		function database() {
			// database name, will be escaped by Adminer
			return $_SESSION['ADM_db'];
		}

		/** Prints table list in menu
		 * @param array
		 * @return null
		 */
		function tablesPrint($tables) {
			echo '<p id="tables">' . "\n";
			foreach ($tables as $table => $type) {
				echo '<span class="tables-line';
				if ($_GET["select"] == $table or $_GET["table"] == $table) {
					echo '-active';
				}
				echo '">';
				echo '<a href="' . h(ME) . 'select=' . urlencode($table) . '"' . bold($_GET["select"] == $table) . ">" .
					lang('select') . "</a> ";
				echo '<a href="' . h(ME) . 'table=' . urlencode($table) . '"' . bold($_GET["table"] == $table) . ">" .
					$this->tableName(array(
										  "Name" => $table
									 )) . "</a></span>\n"; //! Adminer::tableName may work with full table status
			}
			echo '</p>';
		}

		/** Print homepage
		 * @return bool whether to print default homepage
		 */
		function homepage() {
			echo '<p class="tabs">' . ($_GET["ns"] == "" ? '<a href="' . h(ME) . 'database=">' . lang('Alter database') . "</a>\n" : "");
			if (support("scheme")) {
				echo"<a href='" . h(ME) . "scheme='>" . ($_GET["ns"] != "" ? lang('Alter schema') : lang('Create schema')) .
					"</a>\n";
			}
			return true;
		}


	}

	return new AdminerSoftware($plugins);
}

$session_name = 'tx_t3adminer';
session_name($session_name);
session_start();

include "./adminer-3.2.2.php";
?>