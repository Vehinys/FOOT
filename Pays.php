<?php

class Pays {
    private $nom;
    private $nationalite;
    private $equipes = [];

    public function __construct($nom, $nationalite) {
        $this->nom = $nom;
        $this->nationalite = $nationalite;
    }

    public function ajouterEquipe($equipe) {
        $this->equipes[] = $equipe;
    }

    public function getNom() {
        return $this->nom;
    }

    public function afficherLesCartesUne() {

        echo "<div style='width: 200px; background-color: #bc6766 ; color: white; border-radius: 20px; text-align: center;padding: 10px;'>";

        echo "<h3>{$this->nom}</h3>";

        foreach ($this->equipes as $equipe) {

            echo "<p>{$equipe->getNom()}</p>";
        }
        echo "</div>";
    }
}
?>
