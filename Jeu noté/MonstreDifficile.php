<?php

require "De.php"
require "Joueur.php"
require "MonstreFacile.php"

class MonstreDifficile extends MonstreFacile {
   
    const degatsSort=5;

    public function Attaque(Joueur $joueur){
        parent::Attaque($joueur);
        $joueur->SubitDegats($this->SortMagique());
    }

    private SortMagique(){

        $valeur = $this->de->LanceLeDe();
        if (valeur==6)
        {
            return 0;
        }
        return $degatsSort * $valeur;
       
    }
}

?>