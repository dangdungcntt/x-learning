<?php
/**
 * Created by PhpStorm.
 * User: dangdung
 * Date: 06/02/2018
 * Time: 23:48
 */

namespace App\Http\Controllers\Admin\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
