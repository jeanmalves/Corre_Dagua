<?php 
/**
 * Helper for Ajax work
 *
 * @copyright  2015 tagbox
 * @version    $Id$
 */
/**
 * Indicate if the requisition is Ajax
 * 
 * @return boolean
 */
function isAjax()
{
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
} 

function assoc_to_uri($array)
{
    $temp = array();
    foreach ($array as $key => $val)
    {
        if(is_array($val))
        {
            foreach($val as $subval)
            {
                $temp[] = $key;
                $temp[] = $subval;
            }
        }
        else
        {
            $temp[] = $key;
            $temp[] = $val;
        }
    }
    return implode('/', $temp);
}