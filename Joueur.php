<?php
class Joueur {                                                               // CREE UNE CLASS APPELE "JOUEUR " ET VONT STOCKER LES INFORMATIONS SUR LA CLASS "JOUEUR"

    private $prenom;                                                         // PRENOM DU JOUEUR
    private $nom;                                                            // NOM DU JOUEUR
    private $dateDeNaissance;                                                // DATE DE NAISSANCE DU JOUEUR
    private $transferts = [];                                                // UN TABLEAU VIDE POUR GARDER LES INFORMATIONS DE TRANSFERTS DU JOUEUR


    public function __construct($prenom, $nom, $dateDeNaissance) {           // UNE FONCTION QUI ASSIGNE LES VALEURS AU JOUEUR
        
        $this->prenom = $prenom;                                             // PRENOM DU JOUEUR
        $this->nom = $nom;                                                   // NOM DU JOUEUR
        $this->dateDeNaissance = new DateTime($dateDeNaissance);             // DATE DE NAISSANCE DU JOUEUR
    }

    public function ajouterTransfert($transfert) {                           // UNE FONCTION QUI AJOUTE UN TRANSFERT À LA LISTE DES TRANSFERTS 

        $this->transferts[] = $transfert;                                    // AJOUTE LE TRANSFERT AU TABLEAU
    }

    public function getPrenom() {                                            // UNE FONCTION QUI RETOURNE LE PRÉNOM DU JOUEUR

        return $this->prenom;                                                // RETOURNE LE PRÉNOM
    }

    public function getNom() {                                               // UNE FONCTION QUI RETOURNE LE NOM DU JOUEUR

        return $this->nom;                                                   // RETOURNE LE NOM
    }

    public function getAge() {                                               // UNE FONCTION QUI CALCULE ET RETOURNE L'ÂGE DU JOUEUR

        $now = new DateTime();                                               // LA DATE D'AUJOURD'HUI
        $age = $now->diff($this->dateDeNaissance);                           // CALCULE LA DIFFÉRENCE ENTRE AUJOURD'HUI ET LA DATE DE NAISSANCE
        return $age->y;                                                      // RETOURNE L'AGE EN ANNEES
    }

    
    public function afficherCarriere() {                                     // UNE FONCTION QUI AFFICHE LES INFORMATIONS DU JOUEUR ET DES TRANSFERTS
        echo "<div style='width: 200px; background-color: #6aaf5d ; color: 
        white; border-radius: 20px; text-align: center; padding: 10px;'>";   // CREE UNE DIV AVEC UN STYLE
        
        echo "<h3>{$this->prenom} {$this->nom}</h3>";                        // AFFICHE LE PRÉNOM ET LE NOM DU JOUEUR

        echo "<p>{$this->getAge()} ans</p>";                                 // AFFICHE L'ÂGE DU JOUEUR

        foreach ($this->transferts as $transfert) {                          // POUR CHAQUE TRANSFERT DANS LA LISTE DES TRANSFERTS

            $equipe = $transfert->getEquipe();                               // RECUPERE LES EQUIPES  DE GETEQUIPE DE TRANSFERT DE LA CLASS EQUIPE
            $pays = $equipe->getPays()->getNom();                            // RECUPERE LE NOM DU PAYS DE L'EQUIPE DE LA CLASS PAYS
            $dateDebut = new DateTime($transfert->getDateDebut());           // RECUPERE LA DATE DE DEBUT DU TRANSFERT
            echo "<p>{$equipe->getNom()} ({$dateDebut->format('Y')}) </p>";  // AFFICHE LE NOM DE L'ÉQUIPE ET L'ANNÉE DU TRANSFERT AVEC LE FORMAT UNIQUEMENT DE L ANNEE

        }

        echo "</div>";                                                       // FERME LA DIV
    }
}
