<?php

class Transfert {
    private $dateDebut;
    private $dateFin;
    private $joueur;
    private $equipe;

    public function __construct($dateDebut, $dateFin, $joueur, $equipe) {
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->joueur->ajouterTransfert($this);
        $this->equipe->ajouterTransfert($this);
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function getEquipe() {
        return $this->equipe;
    }

    public function getJoueur() {
        return $this->joueur;
    }
}

