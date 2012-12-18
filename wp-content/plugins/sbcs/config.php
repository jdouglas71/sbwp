<?php

global $wpdb;

/** Directories */
define('SBCS_DIR', dirname(__FILE__)."/");
define('SBCS_RELATIVE_DIR', "/wp-content/plugins/sbcs/");
define('SBCS_CALLBACK_DIR', get_option("siteurl").SBCS_RELATIVE_DIR);
define('SBCS_CSS', SBCS_CALLBACK_DIR."sbcs.css");

/** Logfile */
define('LOGFILE', SBCS_DIR.'sbcs.log');
/** WordPress Script Debug Flag */
define('SCRIPT_DEBUG', true );

/** Version */
$sbcs_version = "0.5";
/** Text (not really used, just a test) */

/** Scripts */
require_once(SBCS_DIR.'functions.php');
require_once(SBCS_DIR.'info_widget.php');
require_once(SBCS_DIR.'html-widget.php');

?>
