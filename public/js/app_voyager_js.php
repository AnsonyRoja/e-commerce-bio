<?php 
ini_set('zlib.output_compression_level', 5);
ob_start ("ob_gzhandler"); 
$offset = 60 * 60 *3600;
$expire = "expires: " . gmdate ("D, d M Y H:i:s", time() + $offset) . " GMT";
header ($expire);
header("Content-type: text/css");
?>