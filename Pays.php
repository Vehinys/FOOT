<?php


class Pays {                                                                         // CREE UNE CLASS APPELE "PAYS" ET VONT STOCKER LES ATTRIBUTS DANS LA CLASS "PAYS"

    private $nom;                                                                    // LE NOM DU PAYS
    private $nationalite;                                                            // LA NATIONALITÉ DU PAYS
    private $equipes = [];                                                           // UN TABLEAU VIDE POUR GARDER LES INFORMATIONS D EQUIPE

    public function __construct($nom, $nationalite) {                                // CONSTRUCTEUR DE LA CLASSE PAYS
        $this->nom = $nom;                                                           // INITIALISE LE NOM DU PAYS
        $this->nationalite = $nationalite;                                           // INITIALISE LA NATIONALITÉ DU PAYS
    }


    public function ajouterEquipe($equipe) {                                         // METHODE POUR AJOUTER UNE EQUIPE À LA LISTE
        $this->equipes[] = $equipe;                                                  // AJOUTE UNE EQUIPE À LA LISTE DES EQUIPES DU PAYS
    }

    public function getNom() {                                                       // METHODE POUR OBTENIR LE NOM DU PAYS
        return $this->nom;                                                           // RETOURNE LE NOM DU PAYS
    }

    public function afficherLesCartesUne() {                                         // METHODE POUR AFFICHER LES CARTES DES EQUIPES DU PAYS
  
        echo "<div style='width: 200px; background-color: #bc6766 ; color: white; 
        border-radius: 20px; text-align: center;padding: 10px;'>";                   // CREE UNE DIV AVEC UN STYLE
        
        echo "<h3>{$this->nom}</h3>";                                                // AFFICHE LE NOM DU PAYS COMME TITRE

        foreach ($this->equipes as $equipe) {                                        // POUR CHAQUE EQUIPE DANS LA LISTE DES EQUIPES DU PAYS
            
            echo "<p>{$equipe->getNom()}</p>";                                       // AFFICHE LE NOM DE L'EQUIPE
        }

        
        echo "</div>";                                                               // FERME LA DIV
    }
}                                                                                    


