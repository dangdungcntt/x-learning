<?php

namespace App\Http\Controllers\Frontend;

use App\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('frontend.pages.404')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('frontend.pages.404')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('frontend.pages.404')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('frontend.pages.404')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('frontend.pages.404')->with($data);
    }
}
