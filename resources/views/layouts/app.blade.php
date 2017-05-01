	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reddit Clone</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Reddit Clone New Title</h1>
				
			</div>
		</div>
		<hr>

		@include('layouts._errors')
		
		@yield('content')<!--******en la parte donde se va a mostrar el contenido a cada view-->
	</div>
	
</body>
</html>