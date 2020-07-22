<!DOCTYPE html>
<html>
<head>
	<title>MAZE</title>
</head>
<body>

	<form action="maze.php" method="get">
		Ukuran: <input type="number" name="ukuran" required><br>
		<input type="submit" value="Submit">
	</form>

	<br><br>

	<tt>
		<?php

		if(isset($_GET["ukuran"])){
			$validasi = ($_GET["ukuran"] + 1) / 4;
			if(is_int($validasi) &&  $validasi > 0){
				$s = $_GET["ukuran"];
				$counter = 0;

				for ($i=1; $i <= $s; $i++) { 
					for ($j=1; $j <= $s; $j++) { 
						if($i%2 == 0){
							if($j == 1 || $j == $s){
								echo "@";
							}else{
								echo "&nbsp;";
							}
						}else{
							if($counter%2 == 0){
								if($j == 2){
									echo "&nbsp;";
								}else{
									echo "@";
								}
							}else{
								if($j == $s-1){
									echo "&nbsp;";
								}else{
									echo "@";
								}
							}

							if ($j == $s) {
								$counter++;
							}
						}
					}
					echo "<br>";
				}

			}else{
				echo "Input harus bilangan 4n - 1, dimana n adalah positive integer. Misalkan 15, yang didapat dari 4*4-1.";
			}

		}

		?>
	</tt>

</body>
</html>