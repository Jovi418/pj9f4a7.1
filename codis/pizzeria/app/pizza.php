<?php
	$pvp = 8;
	$IVA=21
	if (empty($_GET['ingr'])) {
		 echo "El preu de la pizza bàsica és $pvp_public € (IVA inclòs)<br>";
	}
	else {
		$pvp=((100+$IVA)/100)*(8+count($_GET['ingr']));
		echo "Has demanat la pizza bàsica amb:<br> ";
		foreach ($_GET['ingr'] as $ingredient) {
			if ($ingredient) {
				echo "* $ingredient<br>";
			}
		}
		echo "El preu és $pvp € (IVA inclòs)<br>";
		exit(0);
	}
?>
