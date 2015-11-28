<?php 
/**
 * Helper for Price work
 *
 * @copyright  2015 tagbox
 * @version    $Id$
 */
/**
 * Preprocess price number
 * 
 * @return boolean
 */
function format_price($price = 0)
{
	//var_dump( function_exists("money_format") );
	$a = money_format('%n', $price);
    //var_dump($a);
    //$b = number_format( $a, 2, ',', '.');
    //var_dump($b);

    // remove ,00
    if( substr($a, -3) == ',00'){
    	return substr($a, 0, -3);
    }

    return $a;
} 