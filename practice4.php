<html>
	<body>
		<h1>Multiplication Table</h1>
		<table border="1 px solid black">
		<?php
		$n = $_POST["n"];
		echo "<tr><td>index</td>";
		for ($i = 1; $i <= $n; $i++){
			echo "<td>" . $i . "</td>";
		}  
		echo "</tr>";
		for ($i = 1; $i <= $n; $i++){
			echo "<tr><td>$i</td>";
			for ($j = 1; $j <= $n; $j++){
				echo "<td> " . $i*$j . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		?>
	</body>
</html>
