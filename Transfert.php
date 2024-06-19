<?php

class Transfert {                                                            // CREE UNE CLASS APPELE "TRANSFERT" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "TRANSFERT"

    private $dateDebut;                                                      // DATE DE DEBUT DU TRANSFERT
    private $dateFin;                                                        // DATE DE FIN DU TRANSFERT (EVENTUELLEMENT NULL)
    private $joueur;                                                         // LE JOUEUR CONCERNE PAR LE TRANSFERT
    private $equipe;                                                         // L'EQUIPE VERS LAQUELLE LE JOUEUR EST TRANSFERE

                                                                            
    public function __construct($dateDebut, $dateFin, $joueur, $equipe) {    // CONSTRUCTEUR DE LA CLASSE TRANSFERT
        $this->dateDebut = $dateDebut;                                       // INITIALISE LA DATE DE DEBUT DU TRANSFERT
        $this->dateFin = $dateFin;                                           // INITIALISE LA DATE DE FIN DU TRANSFERT
        $this->joueur = $joueur;                                             // INITIALISE LE JOUEUR CONCERNE PAR LE TRANSFERT
        $this->equipe = $equipe;                                             // INITIALISE L'EQUIPE VERS LAQUELLE LE JOUEUR EST TRANSFERE

                                                                        
        $this->joueur->ajouterTransfert($this);                              // AJOUTE CE TRANSFERT AU JOUEUR ET AU JOUEUR CONCERNES
        $this->equipe->ajouterTransfert($this);                              // AJOUTE CE TRANSFERT AU JOUEUR ET À L'EQUIPE CONCERNES
    }

    public function getDateDebut() {                                         // METHODE POUR OBTENIR LA DATE DE DEBUT DU TRANSFERT
        return $this->dateDebut;                                             // RETOURNE LA DATE DE DEBUT DU TRANSFERT
    }

                                                                            
    public function getEquipe() {                                            // METHODE POUR OBTENIR L'EQUIPE VERS LAQUELLE LE JOUEUR EST TRANSFERE
        return $this->equipe;                                                // RETOURNE L'EQUIPE CONCERNÉE PAR LE TRANSFERT
    }

    public function getJoueur() {                                            // METHODE POUR OBTENIR LE JOUEUR CONCERNE PAR LE TRANSFERT
        return $this->joueur;                                                // RETOURNE LE JOUEUR CONCERNE PAR LE TRANSFERT
    }
}

