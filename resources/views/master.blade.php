<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.head')

<body>
	<div class="wapper">

		@include('layouts.top')
        @include('layouts.header')
        @include('layouts.banner')

        @yield('content')

		@include('layouts.footer')

	</div>
	
		@include('layouts.core-scripts')
    
	    @yield('scripts')
</body>

</html>