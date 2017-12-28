<?php
/**
* get active array for menu
*
* @param $key
*/
function getActiveMenu($key = '')
{
    $active = [
        'courses' => '',
        'instructors' => '',
        'contact' => '',
        'teaching' => ''
    ];
    if (!empty($key)) $active[$key] = 'active';
    return $active;
}