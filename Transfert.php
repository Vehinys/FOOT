<?php

// DÉBUT DE LA CLASSE TRANSFERT
class Transfert {
    // ATTRIBUTS PRIVÉS DE LA CLASSE TRANSFERT
    private $dateDebut; // DATE DE DÉBUT DU TRANSFERT
    private $dateFin; // DATE DE FIN DU TRANSFERT (ÉVENTUELLEMENT NULL)
    private $joueur; // LE JOUEUR CONCERNÉ PAR LE TRANSFERT
    private $equipe; // L'ÉQUIPE VERS LAQUELLE LE JOUEUR EST TRANSFÉRÉ

    // CONSTRUCTEUR DE LA CLASSE TRANSFERT
    public function __construct($dateDebut, $dateFin, $joueur, $equipe) {
        $this->dateDebut = $dateDebut; // INITIALISE LA DATE DE DÉBUT DU TRANSFERT
        $this->dateFin = $dateFin; // INITIALISE LA DATE DE FIN DU TRANSFERT
        $this->joueur = $joueur; // INITIALISE LE JOUEUR CONCERNÉ PAR LE TRANSFERT
        $this->equipe = $equipe; // INITIALISE L'ÉQUIPE VERS LAQUELLE LE JOUEUR EST TRANSFÉRÉ

        // AJOUTE CE TRANSFERT AU JOUEUR ET À L'ÉQUIPE CONCERNÉS
        $this->joueur->ajouterTransfert($this);
        $this->equipe->ajouterTransfert($this);
    }

    // MÉTHODE POUR OBTENIR LA DATE DE DÉBUT DU TRANSFERT
    public function getDateDebut() {
        return $this->dateDebut; // RETOURNE LA DATE DE DÉBUT DU TRANSFERT
    }

    // MÉTHODE POUR OBTENIR L'ÉQUIPE VERS LAQUELLE LE JOUEUR EST TRANSFÉRÉ
    public function getEquipe() {
        return $this->equipe; // RETOURNE L'ÉQUIPE CONCERNÉE PAR LE TRANSFERT
    }

    // MÉTHODE POUR OBTENIR LE JOUEUR CONCERNÉ PAR LE TRANSFERT
    public function getJoueur() {
        return $this->joueur; // RETOURNE LE JOUEUR CONCERNÉ PAR LE TRANSFERT
    }
}

// FIN DE LA CLASSE TRANSFERT
?>
