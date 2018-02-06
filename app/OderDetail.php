<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OderDetail extends Model
{
    protected $fillable = ['user_id', 'coupon', 'coupon_amount', 'purchase_date', 'amount'];

    public function order () {
        return $this->hasOne('App\Orders', 'id', 'id');
    }
}
