<?php

class Joueur extends Personnage {

public function __construct($niveau, $nom) {
		parent::__construct($niveau, $nom);
		
		$this->endurance = $this->niveau * 2;
		$this->force = $this->niveau * 2;
		$this->attaque = $this->force * 2;
		$this->pv = $this->endurance * 5;
	} 

		public function combat($mob) {
		$this->ennemie = $mob;
		if($mob->niveau > $this->niveau) {
			echo 'NON';
		}
	}
}