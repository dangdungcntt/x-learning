<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('frontend.layouts.head')

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
        @yield('content')

		@include('frontend.layouts.footer')

	</div>
	
		@include('frontend.layouts.core-scripts')
    
	    @yield('scripts')

</body>

</html>