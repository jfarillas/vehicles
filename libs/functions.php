<?php
/**
 * @package Vehicle
 * @file functions.php
 * @brief Functions use for Vehicle
 * @author ludivina.halog
 */

/**
 * Remove special characters from sql input
 * prevents execution of arbitrary sql
 * remove ;"<",
 * @param txt [in] text to be cleansed
 * @return cleansed text
 */
function strip_specials($txt) {
	$spc = array(";","\"","(", ")", ",");
	$ret = str_replace($spc, "", $txt);
	return $ret; 	
}

/**
 * Convert utft &#NNNN; to %uNNNN
 * @param in [in] Input string
 * @return converted string
 * if no &# is found, then return unmodified string
 */
function utf8_javascript($in) {
	if(preg_match('/&#/',$in)) {
		$in = str_replace('&#','%u',$in);
		$in = str_replace(';','',$in);
	}
	return $in;
}


?>