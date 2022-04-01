	<footer>
		<?php 
			$nb = trim(file_get_contents('comptage/mon_compteur.txt'));
			$nb++;
			echo $nb.' visites';
			file_put_contents('comptage/mon_compteur.txt', $nb, LOCK_EX);
		?>
	</footer>