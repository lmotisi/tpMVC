<?php
	require_once('params_connexion.php');
	
	class ModelePersonne extends ParamsDB
	{	
		private $connexion = ' ';
		
		function __construct() {
			$this->connexion = self::connexionDB();
		}
		
		public function connexionDB() {
			try 
			{
				$connexion = new PDO(self::$db, self::$user, self::$passwd, 
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} catch (Exception $e) 
			{
				die('Erreur :' . $e->getMessage());
			}
			return $connexion;
		}
		
		public function getListePersonne() {
			return $this->connexion->query('SELECT * FROM personne');
		}
		
		public function getPersonne($id) {
			$requete = $this->connexion->query("SELECT id, prenom, sexe, DATE_FORMAT(date_naissance, '%d/%m/%Y') as date_naissanceF, date_naissance FROM personne WHERE id=$id");
			return $requete->fetch();
		}
		
		public function ajouterPersonne($prenom, $sexe, $date_naissance) {
			$requete = $this->connexion->prepare("INSERT INTO personne VALUES('', ? , ? , ?)");
			return $requete->execute(array($prenom, $sexe, $date_naissance));
		}
		
		public function supprimerPersonne($id) {
			$requete = $this->connexion->prepare('DELETE FROM personne WHERE id = ?');
			return $requete->execute(array($id));
		}
		
		public function modifierPersonne ($id, $prenom, $sexe, $date_naissance) {
			$requete = $this->connexion->prepare('UPDATE personne SET prenom=?, sexe=?, date_naissance=? WHERE id=?');
			return $requete->execute(array($prenom, $sexe, $date_naissance, $id));
		}
		
	}


?>