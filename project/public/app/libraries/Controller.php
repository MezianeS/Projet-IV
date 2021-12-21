<?php 

	/*
	 * CONTROLLER
	 * CHARGE LES MODELES ET VUES.
	 */
	class Controller {
		// charge le modèle
		public function model($model){
			// Require model file
			require_once '../app/models/' . $model . '.php';

			//initiation 
			return new $model();
		}


		// Load view
		public function view($view, $data = []){
			// Check for view file
			if(file_exists('../app/views/' . $view . '.php')){
				require_once '../app/views/' . $view . '.php';
			} else {
				//view does not exist
			  die("La vue n'existe pas");
			}
		}
	}