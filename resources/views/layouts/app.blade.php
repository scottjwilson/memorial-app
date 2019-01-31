 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>@yield('title')</title>
 	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

 </head>
 <body class="bg-grey-lighter">
 	<div class="container mx-auto">
	 	<ul class="list-reset flex mt-6"> 
	 		<li class="mr-6"><a class="no-underline text-red hover:text-red-darker" href="/">Home</a></li>
	 		<li class="mr-6"><a class="no-underline text-red hover:text-red-darker" href="/about">About</a></li>
	 		<li class="mr-6"><a class="no-underline text-red hover:text-red-darker" href="/video">Memorial Video</a></li>
	 		<li class="mr-6"><a class="no-underline text-red hover:text-red-darker" href="/messages">Messages</a></li>
	 	
	 	</ul>

	 	<div class="mt-6">
	 		@yield('content')
	 	</div>
 	</div>
 </body>
 </html>