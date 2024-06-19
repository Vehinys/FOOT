<?php

// INCLUSION DES CLASSES

include 'Equipe.php';
include 'Joueur.php';
include 'Pays.php';
include 'Transfert.php';

// CRÉATION DES PAYS

$pays1 = new Pays("France", "français");
$pays2 = new Pays("Espagne", "espagnole");
$pays3 = new Pays("Angleterre", "anglais");
$pays4 = new Pays("Italie", "italien");

// CRÉATION DES ÉQUIPES

$equipe1 = new Equipe("PSG", $pays1, "1970");
$equipe2 = new Equipe("Racing Club Strasb", $pays1, "1906");
$equipe3 = new Equipe("FC Barcelone", $pays2, "1899");
$equipe4 = new Equipe("Juventus", $pays4, "1897");
$equipe5 = new Equipe("Manchester United", $pays3, "1878");
$equipe6 = new Equipe("Real Madrid", $pays2, "1902");

// CRÉATION DES JOUEURS

$joueur1 = new Joueur("Killian", "Mbappe", "1998-12-20");
$joueur2 = new Joueur("Cristiano", "Ronaldo", "1985-02-05");
$joueur3 = new Joueur("Lionel", "Messi", "1987-06-24");
$joueur4 = new Joueur("Neymar", "Junior", "1992-02-05");

// CRÉATION DES TRANSFERTS

$transfert1 = new Transfert("11/11/2017", "", $joueur1, $equipe1);
$transfert2 = new Transfert("11/11/2009", "11/11/2017", $joueur2, $equipe6);
$transfert3 = new Transfert("11/11/2018", "11/11/2020", $joueur2, $equipe4);
$transfert4 = new Transfert("11/11/2021", "", $joueur2, $equipe5);
$transfert5 = new Transfert("11/11/2004", "11/11/2020", $joueur3, $equipe3);
$transfert6 = new Transfert("11/11/2021", "", $joueur3, $equipe1);
$transfert7 = new Transfert("11/11/2013", "11/11/2016", $joueur4, $equipe3);
$transfert8 = new Transfert("11/11/2017", "", $joueur4, $equipe1);

// AFFICHAGE DES INFORMATIONS : PAYS, ÉQUIPES ET JOUEURS

echo "<div style='display: flex; gap: 40px; justify-content: space-evenly;'>";

// AFFICHAGE DES INFOS DE CHAQUE PAYS

$pays1->afficherLesCartesUne();
$pays2->afficherLesCartesUne();
$pays3->afficherLesCartesUne();
$pays4->afficherLesCartesUne();

echo "</div>";

echo "<div style='display: flex; gap: 40px; justify-content: space-evenly; margin-top: 20px;'>";

// AFFICHAGE DES INFOS DE CHAQUE ÉQUIPE

$equipe1->afficherLesCartesDeux();
$equipe2->afficherLesCartesDeux();
$equipe3->afficherLesCartesDeux();
$equipe4->afficherLesCartesDeux();
$equipe5->afficherLesCartesDeux();
$equipe6->afficherLesCartesDeux();

echo "</div>";

echo "<div style='display: flex; gap: 40px; justify-content: space-evenly; margin-top: 20px;'>";

// AFFICHAGE DES CARRIÈRES DE CHAQUE JOUEUR
$joueur1->afficherCarriere();
$joueur2->afficherCarriere();
$joueur3->afficherCarriere();
$joueur4->afficherCarriere();

echo "</div>";

