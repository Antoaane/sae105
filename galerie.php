<?php require 'head.php' ?>

<?php require 'header.php' ?>

<?php session_start(); ?>

	<main>
		<h1 class="tab-title">Galerie d'image</h1>
		<?php
			if (!empty($_SESSION['messageImage'])) {
				echo '<p>'.$_SESSION['messageImage'].'</p>'."\n";
				$_SESSION['messageImage']=null;
			}
		?>
		<div class="galery">
			<?php
				$content=dir("images/galerie/");
				while ( $element=$content->read() ) {
					if (!is_dir($element)) {
						$extension = substr($element, -4);
						if ((strtolower($extension)=='.jpg') || (strtolower($extension)=='.png')) {
							//echo $element.'<br />'."\n";
							echo '
							<div class="item">
								<img class="galery-img" src="images/galerie/'.$element.'" alt="' .$element.'" />
							</div>
							'."\n";
						}
					}
				}
				$content->close();
			?>
		</div>
		<form class="formu2" method="post" action="ajout_image.php" enctype="multipart/form-data">
			<label class="upload" for="file">Ajouter une image</label>
			<input class="file" id="file" type="file" name="nouvelleImage" />
			<input class="input2" id="pswd" type="password" name="mdp" placeholder="Mot de passe" />
			<input class="input2" id="sbmt" type="submit" value="Ajouter" />
		</form>
	</main>

<?php require 'footer.php' ?>

<?php require 'end.php' ?>