<?php require 'head.php' ?>

<?php require 'header.php' ?>

	<main>
		<h1 class="tab-title">Contact</h1>
		<form method="POST" class="formu" action="envoyer_mail.php">
			<div class="id">
				<input type="text" placeholder="Prénom" name="prenom" id="prenom">
				<input type="text" placeholder="Nom" name="nom" id="nom">
			</div>
			<input type="email" placeholder="E-mail" name="email" id="email">
			<textarea name="message" placeholder="Message" id="message"></textarea>
			<input type="submit" name="envoyer" id="envoyer">
		</form>
	</main>
	
<?php require 'footer.php' ?>

<?php require 'end.php' ?>