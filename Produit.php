<?php

class Produit {

	public $id=0;
	public $nom="Aucun nom";
	private $prix= 0;
	public $poids=1.0;
	private $taux=0.1925; /* Ceci est la TVA */

	public function __construct($nom ="Barette Ram", $prix = 15000){

		$this-> prix= $prix;
		$this-> nom = $nom;
	}

	public function calculerPrixHorsTaxe(){
		return $this-> prix;
	}

	public function calculerPrixTaxe(){
		return $this-> prix * $this -> taux;
	}

	public function setPrix($prix =0){
		if ($prix<=0) {
			throw new Exception("Le prix doit etre superieur a zero \n", 1);
			
		}
		else { $this->prix = $prix;}
	}


	public function getPrix(){ return $this-> prix;}
}

?>