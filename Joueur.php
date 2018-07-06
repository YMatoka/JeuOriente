<?php

class joueur{

        public $pv;
        private $de;
        
        public function __construct($de, $pv)
        {
                $this->de = new De();
                $this->pv = $pv;
        }

        public function EstVivant()
        {
            return $this->pointDeVie > 0;
        }

        public function LanceLeDe()
        {
            return $this->de->LanceLeDe();
        }

        public function SubitDegats(int $degats)
        {
          if(!$this->BouclierFonctionne())
              $this->pointDeVie -= $degats;
        }
    
        private function BouclierFonctionne():bool{
            return $this->de->LanceLeDe() <= 2;
        }

}

?>