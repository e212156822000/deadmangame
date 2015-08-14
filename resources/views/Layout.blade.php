<!DOCTYPE html>
<html>
    <head>
	    @yield('css')
   		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		@yield('js')
    </head>
    <body>
    	@yield('content')
    </body>
</html>
