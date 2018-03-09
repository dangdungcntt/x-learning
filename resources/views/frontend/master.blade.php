<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- Mobile Specific Metas -->

    <!-- Title -->
    <title>@yield('title', 'IT Course') </title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    @include('frontend.layouts.main-css')

    @yield('style')
</head>
<body>
<div class="wapper">

    @include('frontend.layouts.top')
    @include('frontend.layouts.header')

    @if (!isset($showBanner) || $showBanner) @include('frontend.layouts.banner') @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container" style="margin-top: 20px">
        @if (session('flash_success'))
            <div class="alert alert-success">
                {{ session('flash_success') }}
            </div>
        @endif

        @if (session('flash_error'))
            <div class="alert alert-danger">
                {{ session('flash_error') }}
            </div>
        @endif
    </div>
    @yield('content')

    @include('frontend.layouts.footer')

</div>

@include('frontend.layouts.core-scripts')

@yield('scripts')

</body>

</html>