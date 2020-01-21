<html>

<head>
	<title>Challenge 2</title>

	<style>
		i {
			display: inline-block;
			width: 14px;
			height: 14px;
		}
		i.b {
			background-color: #000;
		}
		i.w {
			background-color: #FFF;
		}

	</style>

</head>

<body>

<div id="labyrinth"></div>

</body>


<script type="text/javascript">
	fetch('inputbinary.txt')
		.then(response => response.text())
		.then(text => createLabyrinth(text));

	function createLabyrinth(text) {
		var lines = text.split("\n"); // Create array with lines
		for (var i = 0; i < lines.length; i++) {  // Loop trough lines
			var thisLine = lines[i];
			var output = '<div class="row">'; // 'wrap' start
			for (var j = 0; j < thisLine.length; j++) { // Loop trough all values in lines
				var elem = '<i class="w"></i>';  // 0 = entry
				if (thisLine[j] == 1) { // If value = 1, this means its a wall
					elem = '<i class="b"></i>';
				}
				output = output + elem;
			}

			output = output + '</div>';
			document.getElementById('labyrinth').insertAdjacentHTML('beforeend', output);
		}
	}
</script>

</html>
