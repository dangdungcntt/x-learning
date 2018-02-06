<!DOCTYPE html>
<html>

@include('admin.layouts.head')

<body class="fixed-nav fixed-sidebar">

<div id="wrapper">

    @include('admin.layouts.nav-left')

    <div id="page-wrapper" class="gray-bg dashbard-1">

        @include('admin.layouts.nav-top')

        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('admin.layouts.footer')

    </div>
</div>

@include('admin.layouts.core-scripts')

@yield('script')

</body>

</html>
