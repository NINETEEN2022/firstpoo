<?php

// class MachineACafe {

// 	public $couleur = 'noir';
// 	public function faitLeCafe(){
// 		echo "Je fais un café...";
// 	}
// }

// echo 'Hello World !';

//Encapsulation
class crayon {

	// Code décrivant l'objet
	public $couleur = 'noir';
	//Attributs / propriétés	

	public function ecrire(){

		echo "ecrire en couleur".$this->couleur;
	}

}


//Instanciation

$crayon = new crayon();
// $crayon->couleur = 'bleu';

echo $crayon->couleur;
echo "<pre>";
print_r($crayon);
echo "<pre>";


