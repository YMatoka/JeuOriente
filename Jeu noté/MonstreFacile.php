<?php

require "De.php"
require "Joueur.php"

class MonstreFacile extends Monstre{

    const degats=10;
    private Estvivant;
    $de;

    public function __construct(){
        $this->de = new De();
        $this->EstVivant = true;
    }

    public function setLife($EstVivant)
    {
        $this->EstVivant = $EstVivant;
    }
    
    public function getLife()
    {
        return $this->EstVivant;
    }


    public function Attaque(){

        $lanceMonstre=$this->LanceLeDe();
        $lanceJoueur=$this->LanceLeDe();
        
        if($lanceMonstre>$lanceJoueur){
            $joueur->SubitDegats(degats);
        }
    }

    public function SubitDegats(){
        $this->EstVivant = false;
    }

    public int LanceLeDe()
    {
        return $de->getType();
    }


}

?>