<?php

// Chargement de tous les films
include_once("database.php");

// Récupére tous les films
function get_all_films() {
  global $films;
  return $films;
}

// Récupére un film selon son id
function get_film_by_id(id) {
  global $films;
  return $films[id];
}

// Récupére tous les films en fonction de l'année
function annee_sup($annee) {
  // films
  $films = get_all_films();
  $rows = array();
  foreach ($films as $film) {
    if($film["Année"] > $annee) {
      array_push($rows, $film);
    }
  }
  return $rows;
}

// Récupére tous les acteurs de tous les films
function get_all_acteurs() {
  // films
  $films = get_all_films();
  $acteurs = array();

  // Boucle sur les films
  foreach ($films as $film) {
    foreach ($film["Acteurs"] as $acteur) {
      array_push($acteurs, $acteur);
    }
  }
  return array_unique($acteurs);
}

// Récupére tous les acteurs de tous les films (unique)
function get_all_acteurs_unique() {
  return array_unique(get_all_acteurs());
}

// Récupére tous les années de tous les films
function get_all_annees() {
  // films
  $films = get_all_films();
  $annees = array();

  // Boucle sur les films
  foreach ($films as $film) {
    foreach ($film["Année"] as $annee) {
      array_push($annees, $annee);
    }
  }
  return array_unique($annees);
}

// Récupére tous les années de tous les films (unique)
function get_all_annees_unique() {
  return array_unique(get_all_annees());
}

// Récupére tous les acteurs ayant jouer dans un film possèdant un genre spécifique
function acteurs_genre($genre) {
  // films
  $films = get_all_films();
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
