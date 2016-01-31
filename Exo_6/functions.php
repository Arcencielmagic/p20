<?php

// Chargement de tous les films
include_once("data.php");

// Récupére tous les films
function films_all(){
  global $films;
  return $films;
}

// Récupére tous les films en fonction de l'année
function annee_sup($annee) {
  // films
  $films = films_all();
  $rows = array();
  foreach ($films as $film) {
    if($film["Année"] > $annee) {
      array_push($rows, $film);
    }
  }
  return $rows;
}

// Récupére tous les acteurs de tous les films
function acteurs_all() {
  // films
  $films = films_all();
  $acteurs = array();

  // Boucle sur les films
  foreach ($films as $film) {
    foreach ($film["Acteurs"] as $acteur) {
      array_push($acteurs, $acteur);
    }
  }
  return array_unique($acteurs);
}

// Récupére tous les acteurs ayant jouer dans un film possèdant un genre spécifique
function acteurs_genre($genre) {
  // films
  $films = films_all();
  $acteurs = array();

  // Boucle sur les films
  foreach ($films as $film) {
    // Boucle sur les genres
    foreach ($film["Genres"] as $genre_film) {
      //Si le genre est le même, on récupere tous les acteurs du film
      if($genre == $genre_film) {
        //Boucle de récupération des acteurs
        foreach ($film["Acteurs"] as $acteur) {
          array_push($acteurs, $acteur);
        }
      }
    }
  }
  // Récuperation d'un tableau unique
  return array_unique($acteurs);
}