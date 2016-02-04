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

// Récupére tous les films en fonction du nombre de like
function like_sup() {
  $max = null;
  // films
  $films = get_all_films();
  foreach ($films as $film) {
    if($max < $film["Like"]) {
      $max = $film["Like"];
    }
  }
  return $max;
}

// Récupére tous les films en fonction de leur genre
function film_genre($genre) {
  // films
  $films = get_all_films();
  $rows = array();
  foreach ($films as $film) {
    if($film["Genre"] == $genre) {
      array_push($rows, $film);
    }
  }
  return $rows;
}


// Récupére tous les items de tous les films
function get_all_items($key) {
  // films
  $films = get_all_films();
  $items = array();

  // Boucle sur les films
  foreach ($films as $film) {
    foreach ($film[$key] as $item) {
      array_push($items, $item);
    }
  }
  return $items;
}

// Récupére tous les années de tous les films (unique)
function get_all_items_unique($key) {
  return array_unique(get_all_items($key));
}

// Permet d'aplatir un tableau
function array_linearize($array) {
  $linear_array = array();
  foreach ($array as $sub_array) {
    foreach ($sub_array as $item) {
      array_push($linear_array, $item);
    }
  }
  return $linear_array;
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
