<?php
/* For licensing terms, see /license.txt */
/**
==============================================================================
* Chamilo LMS
*
* Updates the Chamilo files from version 1.8.6.2 to version 1.8.7
* This script operates only in the case of an update, and only to change the
* active version number (and other things that might need a change) in the
* current configuration file.
* @package chamilo.install
==============================================================================
*/

if (defined('SYSTEM_INSTALLATION') || defined('DOKEOS_COURSE_UPDATE')) {

	// Edit the configuration file
	$file = file('../inc/conf/configuration.php');
	$fh = fopen('../inc/conf/configuration.php', 'w');
	$found_version = false;
	$found_stable = false;
	$found_software_name = false;
	$found_software_url = false;
	foreach ($file as $line) {
		$ignore = false;
		if (stripos($line, '$_configuration[\'dokeos_version\']') !== false) {
			$found_version = true;
			$line = '$_configuration[\'system_version\'] = \''.$new_version.'\';'."\r\n";
		elseif (stripos($line, '$_configuration[\'system_version\']') !== false) {
			$found_version = true;
			$line = '$_configuration[\'system_version\'] = \''.$new_version.'\';'."\r\n";
		} elseif (stripos($line, '$_configuration[\'dokeos_stable\']') !== false) {
			$found_stable = true;
			$line = '$_configuration[\'system_stable\'] = '.($new_version_stable ? 'true' : 'false').';'."\r\n";
		} elseif (stripos($line, '$_configuration[\'system_stable\']') !== false) {
			$found_stable = true;
			$line = '$_configuration[\'system_stable\'] = '.($new_version_stable ? 'true' : 'false').';'."\r\n";
		} elseif (stripos($line, '$_configuration[\'software_name\']') !== false) {
			$found_software_name = true;
			$line = '$_configuration[\'software_name\'] = \''.$software_name.'\';'."\r\n";
		} elseif (stripos($line, '$_configuration[\'software_url\']') !== false) {
			$found_software_url = true;
			$line = '$_configuration[\'software_url\'] = \''.$software_url.'\';'."\r\n";
		} elseif (stripos($line,'$userPasswordCrypted') !== false) {
			$line = '$userPasswordCrypted = \''.($userPasswordCrypted).'\';'."\r\n";
		} elseif (stripos($line, '?>') !== false) {
			$ignore = true;
		}
		if (!$ignore) {
			fwrite($fh, $line);
		}
	}
	if (!$found_version) {
		fwrite($fh, '$_configuration[\'system_version\'] = \''.$new_version.'\';'."\r\n");
	}
	if (!$found_stable) {
		fwrite($fh, '$_configuration[\'system_stable\'] = '.($new_version_stable?'true':'false').';'."\r\n");
	}
	if (!$found_software_name) {
		fwrite($fh, '$_configuration[\'software_name\'] = \''.$software_name.'\';'."\r\n");
	}
	if (!$found_software_url) {
		fwrite($fh, '$_configuration[\'software_url\'] = \''.$software_url.'\';'."\r\n");
	}
	fwrite($fh, '?>');
	fclose($fh);

} else {

	echo 'You are not allowed here !';

}
