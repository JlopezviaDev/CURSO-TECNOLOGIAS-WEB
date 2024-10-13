<?php
function cabecera($titulo) {
echo '<!DOCTYPE html>
		<html>
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>'.$titulo.'</title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
					rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
					crossorigin="anonymous">';
				
echo			' <script src="index.js"></script>
			</head>
		<body>
			<div class="container text-center">
					<h1>'.$titulo.'</h1>';
}	
function pie() {
 echo '</div>
	</body>
</html>';
}
?>