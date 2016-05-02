<?php

	require_once('vue.php');
	require_once('modele.php');
	
	class ControleurPersonne {
		
		private $modele;
		
		public function __construct() {
			$this->modele = new ModelePersonne();
		}
		
		public function listePersonnes () {
			VuePersonne::vueListe($this->modele->getListePersonne());
		}
		
		public function details($id) {
			VuePersonne::vueDetails($this->modele->getPersonne($id));
		}
		
		public function form_ajout() {
			VuePersonne::vueFormAjout();
		}
		
		public function ajouter($prenom, $sexe, $date_naissance) {
			VuePersonne::vueAjouter($this->modele->ajouterPersonne($prenom, $sexe, $date_naissance));
		}
		
		public function form_modif($id) {
			VuePersonne::vueFormModif($this->modele->getPersonne($id));
		}
		
		public function modifier($id, $prenom, $sexe, $date_naissance) {
			VuePersonne::vueModifier($this->modele->modifierPersonne($id, $prenom, $sexe, $date_naissance));
		}
		
		
	}


?>