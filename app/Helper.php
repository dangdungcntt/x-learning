<?php
/**
* get active array for menu
*
* @param $key
*/
function getActiveMenu($key = '')
{
    $active = [
        'home' => '',
        'courses' => '',
        'instructors' => '',
        'contact' => '',
        'mycourses' => ''
    ];
    if (!empty($key)) $active[$key] = 'active';
    return $active;
}