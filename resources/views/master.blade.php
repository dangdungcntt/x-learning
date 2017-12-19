<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layout.head')

<body>
	<div class="wapper">

		@include('layout.top') 
        @include('layout.header') 
        @include('layout.banner')

        @yield('content')

		@include('layout.footer')

	</div>
	
		@include('layout.core-scripts')
    
	    @yield('scripts')
</body>

</html>