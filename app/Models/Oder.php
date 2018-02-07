<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    protected $fillable = ['user_id', 'coupon', 'coupon_amount', 'purchase_date', 'amount'];

    public function order_details () {
        return $this->hasOne('App\OrderDetails', 'id', 'id');
    }

    public function coupon () {
        return $this->belongsTo('App\Coupon', 'id', 'coupon');
    }

    public function user() {
        return $this->hasOne('App\Models\Uses', 'id', 'user_id');
    }

    public function courses()
    {
        return $this->belongsToMany(
            'App\Course',
            'order_details',
            'course_id',
            'order_id');
    }

}
