 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>@yield('title')</title>
 	<link href="/css/main.css" rel="stylesheet">
 </head>
 <body class="font-sans">
 	@include('inc.navbar')
	 	<div>
	 		@yield('content')
	 	</div>

 </body>
 </html>