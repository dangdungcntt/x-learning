<?php
/**
* get active array for admin menu
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
        'courses/index' => '',
        'courses/create' => '',
        'lessons' => '',
        'lessons/index' => '',
        'lessons/create' => '',
        'instructors' => '',
        'instructors/index' => '',
        'instructors/create' => '',
        'users' => '',
        'users/index' => '',
        'users/create' => '',
        'orders' => '',
        'orders/index' => '',
        'orders/create' => '',
        'coupons' => '',
        'coupons/index' => '',
        'coupons/create' => ''
    ];

    $array = explode('/', $key);
    if (count($array) > 1) {
        $active[$array[0]] = 'active';
        $active[$key] = 'active';
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