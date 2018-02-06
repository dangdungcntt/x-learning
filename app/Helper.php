<?php
/**
* get active array for menu
*
* @param $key
* @return array
*/
function getAdminActiveMenu($key = '')
{

    $active = [
        'dashboard' => '',
        'transactions' => '',
        'courses' => '',
        'courses/create' => '',
        'lessions' => '',
        'lessions/create' => '',
        'instructors' => '',
        'instructors/create' => '',
        'users' => '',
        'users/create' => '',
        'orders' => '',
        'orders/create' => '',
        'coupons' => '',
        'coupons/create' => ''
    ];

    $array = explode('/', $key);
    if (count($array) > 1) {
        $active[$array[0]] = 'active';
        $active[$array[0].'/'.$array[1]] = 'active';
    } else if (!empty($key)) $active[$key] = 'active';

    return $active;
}

/**
 * get active array for menu
 *
 * @param $key
 * @return array
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