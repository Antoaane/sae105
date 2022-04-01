<?php require 'head.php' ?>

<?php require 'header.php' ?>
	
	<main class=main-table> 
		<h1 class="tab-title">Voici les données</h1>
		<div class="appear">
		<table id="matable" class="display">
			<thead>
				<th>Titre</th>
				<th>Artiste</th>
				<th>Streams Spotify</th>
				<th>Année</th>
				<th>Durée</th>
			</thead>
			<tbody>
				<?php
				$fichier = 'donnees/donnees.json';
				$tabMusicJSON = file_get_contents($fichier);
				$tabMusicPHP = json_decode($tabMusicJSON);
				foreach ($tabMusicPHP as $key => $value) {
					echo "<tr>";
					echo "<td>".$value->Titre."</td>";
					echo "<td>".$value->Artiste."</td>";
					echo "<td>".$value->streamspotify."</td>";
					echo "<td>".$value->Année."</td>";
					echo "<td>".$value->Durée."</td>";
					echo "</tr>";
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th>Titre</th>
					<th>Artiste</th>
					<th>Streams Spotify</th>
					<th>Année</th>
					<th>Durée</th>
				</tr>
        	</tfoot>
		</table>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready( function () {
			$('#matable').DataTable({
							language: {
										url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json'
									  }
			});
		} );
	</script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
	</main>

<?php require 'footer.php' ?>

<?php require 'end.php' ?>
