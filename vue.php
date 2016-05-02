<?php 

	class VuePersonne {
		
		public static function vueListe($listePersonne) {
			foreach($listePersonne as $personne) {
				echo $personne['prenom'].' est de sexe '.$personne['sexe'].'. <a href=index.php?action=details&id='.$personne['id'].'> détails </a>
				<a href=index.php?action=form_modification&id='.$personne['id'].'> modifier </a> </br>';
			}
			echo '<a href=index.php?action=form_ajout> Ajouter une Personne </a>';
		}
		
		public static function vueDetails($personne) {
			echo $personne['prenom'].' est de sexe '.$personne['sexe'].' et est née le '.$personne['date_naissanceF'].'.';
		}
		
		public static function vueFormAjout() {
			?>
			<form action='index.php?action=ajout' method='post'>
				<p>
					<label for="prenom"> Prénom </label> : <input type ="textfield" name="prenom" id="prenom"/> 
					Sexe : <label for="feminin"> Féminin </label> <input type="radio" name="sexe" id="feminin" value="feminin"/>  
					<label for="masculin"> Masculin </label> <input type="radio" name="sexe" id="masculin" value="masculin"/></br>
					<label for="date_naissance"> Date de Naissance : </label> <input type="date" name="date_naissance" id="date_naissance"/>
					<input type="submit" id="button" name="envoi" value="Envoyer" />
			
				</p>
			</form>
			<?php
		}
		
		public static function vueAjouter($res) {
			if($res) {
				echo 'La personne a bien été ajoutée.</br>';
				echo '<a href=index.php?action=liste> Retour à la liste </a>';
			} else {
				echo 'Une erreur est survenue.';
				echo '<a href=index.php?action=liste> Retour à la liste </a>';
			}
		}
		
		public static function vueFormModif($personne) {
			$prenom = $personne['prenom'];
			$sexe = $personne['sexe'];
			$date_naissance = $personne['date_naissance'];
			echo '
			<form action="index.php?action=modification" method="post">
				<p>
					<label for="prenom"> Prénom </label> : <input type ="textfield" name="prenom" id="prenom" value='.$prenom. '> ';
					if($sexe=='feminin') 
					{
						echo'
						Sexe : <label for="feminin"> Féminin </label> <input type="radio" name="sexe" id="feminin" value="feminin" checked/>  
						<label for="masculin"> Masculin </label> <input type="radio" name="sexe" id="masculin" value="masculin"/></br>';
					} else {
						echo'
						Sexe : <label for="feminin"> Féminin </label> <input type="radio" name="sexe" id="feminin" value="feminin"/>  
						<label for="masculin"> Masculin </label> <input type="radio" name="sexe" id="masculin" value="masculin" checked/></br>';
					}
					echo'
					<label for="date_naissance"> Date de Naissance : </label> <input type="date" name="date_naissance" id="date_naissance" value='.$date_naissance. '>
					<input type="hidden" name="id" value='.$_GET['id'].' />
					<input type="submit" id="button" name="envoi" value="Modifier" />
				</p>
			</form>';
			
		}
		
		public static function vueModifier($res) {
			if($res) {
				echo 'La personne a bien été modifiée.</br>';
				echo '<a href=index.php?action=liste> Retour à la liste </a>';
			} else {
				echo 'Une erreur est survenue.';
				echo '<a href=index.php?action=liste> Retour à la liste </a>';
			}
		}
		
	}

?>