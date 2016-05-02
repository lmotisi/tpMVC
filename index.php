<?php

	require_once('controleur.php');
	$controleur = new ControleurPersonne();
	if (isset ($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		header('location: index.php?action=liste');
	}
	
	switch ($action) {
		case 'liste':
			$controleur->listePersonnes();
			break;
		case 'details':
			$id = $_GET['id'];
			$controleur->details($id);
			break;
		case 'form_modification':
			$id = $_GET['id'];
			$controleur->form_modif($id);
			break;
		case 'modification':
			$id = $_POST['id'];
			$prenom = $_POST['prenom'];
			$sexe = $_POST['sexe'];
			$date_naissance = $_POST['date_naissance'];
			$controleur->modifier($id, $prenom, $sexe, $date_naissance);
			break;
		case 'form_ajout':
			$controleur->form_ajout();
			break;
		case "ajout":
			$prenom = $_POST['prenom'];
			$sexe = $_POST['sexe'];
			$date_naissance = $_POST['date_naissance'];
			$controleur->ajouter($prenom, $sexe, $date_naissance);
			break;
			break;
		case "suppression":
			break;
		default :
			header('location: index.php?action=liste');
		
	}


?>