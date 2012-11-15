<?php

/**
 * Logging to file.                                       
 */
function logToFile($msg)
{ 
    // open file
    $fd = fopen(LOGFILE, "a");
    // append date/time to message
    $str = "[" . date("Y/m/d h:i:s", mktime()) . "] " . $msg; 
    // write string
    fwrite($fd, $str . "\n");
    // close file
    fclose($fd);
}

function varDumpStr($var)
{
	ob_start();
	var_dump( $var );
	$out = ob_get_clean();
	return $out;
}

?>

