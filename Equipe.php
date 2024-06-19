<?php

class Equipe {
    private $nom;
    private $pays;
    private $dateDeCreation;
    private $transferts = [];

    public function __construct($nom, $pays, $dateDeCreation) {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->dateDeCreation = $dateDeCreation;
        $this->pays->ajouterEquipe($this);
    }

    public function ajouterTransfert($transfert) {
        $this->transferts[] = $transfert;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPays() {
        return $this->pays;
    }

    public function afficherLesCartesDeux() {

        echo "<div style='width: 200px; background-color: #6680af ; color: white; border-radius: 20px; text-align: center;padding: 10px;'>";

        echo "<h3>{$this->nom}</h3>";

        echo "<p>{$this->pays->getNom()} - {$this->dateDeCreation}</p>";

        foreach ($this->transferts as $transfert) {

            $joueur = $transfert->getJoueur();

            $dateDebut = new DateTime($transfert->getDateDebut());

            echo "<p>{$joueur->getPrenom()} {$joueur->getNom()} ({$dateDebut->format('Y')})</p>";
        }
        echo "</div>";
    }
}

