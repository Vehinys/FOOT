<?php


class Equipe {                                                                                     // CREE UNE CLASS APPELE "EQUIPE" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "EQUIPE"
    private $nom;                                                                                  // LE NOM DE L'EQUIPE
    private $pays;                                                                                 // LE PAYS DE L'EQUIPE
    private $dateDeCreation;                                                                       // LA DATE DE CRÉATION DE L'EUIPE
    private $transferts = [];                                                                      // UN TABLEAU VIDE POUR GARDER LES INFORMATIONS DE TRANSFERTS D EQUIPE

                                                                 
    public function __construct($nom, $pays, $dateDeCreation) {                                    // UNE FONCTION QUI ASSIGNE LES VALEURS A EQUIPE

        $this->nom = $nom;                                                                         // NOM  DE L'EQUIPE
        $this->pays = $pays;                                                                       // PAYS DE L'EQUIPE
        $this->dateDeCreation = $dateDeCreation;                                                   // DATE DE CRÉATION DE L'EQUIPE
        $this->pays->ajouterEquipe($this);                                                         // AJOUTE LES INFORMATIONS  EQUIPE AU TABLEAU DES EQUIPES DU PAYS
    }

    public function ajouterTransfert($transfert) {                                                 // METHODE POUR AJOUTER UN TRANSFERT A LA LISTE DES TRANSFERTS
        $this->transferts[] = $transfert;                                                          // AJOUTE LES INFORMATIONS DE TRANSFERT A LA LISTE
    }
                    
    public function getNom() {                                                                     // UNE FONCTION QUI RETOURNE LE NOM DE L'EQUIPE
        return $this->nom;                                                                         // RETOURNE LE NOM
    }

    public function getPays() {                                                                    // UNE FONCTION QUI RETOURNE LE PAYS DE L'ÉEUIPE
        return $this->pays;                                                                        // RETOURNE LE PAYS
    }

    public function afficherLesCartesDeux() {                                                      // UNE FONCTION QUI AFFICHE LES INFORMATIONS DE L'EQUIPE ET SES TRANSFERTS
        
        echo "<div style='width: 200px; background-color: #6680af ; color: white; 
         border-radius: 20px; text-align: center;padding: 10px;'>";                                // CREE UNE DIV AVEC UN STYLE

        echo "<h3>{$this->nom}</h3>";                                                              // AFFICHE LE NOM DE L'EQUIPE
                              
        echo "<p>{$this->pays->getNom()} - {$this->dateDeCreation}</p>";                           // AFFICHE LE NOM DU PAYS ET LA DATE DE CREATION DE L'EQUIPE

        foreach ($this->transferts as $transfert) {                                                // POUR CHAQUE TRANSFERT DANS LA LISTE DES TRANSFERTS
            $joueur = $transfert->getJoueur();                                                     // RÉCUPÈRE LE JOUEUR DU TRANSFERT
            $dateDebut = new DateTime($transfert->getDateDebut());                                 // RÉCUPÈRE LA DATE DE DÉBUT DU TRANSFERT

            echo "<p>{$joueur->getPrenom()} {$joueur->getNom()} ({$dateDebut->format('Y')})</p>";  // AFFICHE LE PRENOM ET LE NOM DU JOUEUR ET L'ANNEE DU TRANSFERT
        }

        echo "</div>";                                                                             // FERME LA DIV
    }
}

