<?php
  /**
   * page: cie
   */



//OBLIGATOIRE : Récupère les variables globales de Wordpress
  $context = Timber::get_context();

// on récupère le contenu du post actuel grâce à TimberPost
  $post = new TimberPost();

// on ajoute la variable post (qui contient le post) à la variable
// qu'on enverra à la vue twig
  $context['post'] = $post;

// tableau d'arguments pour modifier la requête en base
// de données, et venir récupérer uniquement les trois
// derniers articles
  $args_shows = [
    'post_type' => 'post',
    'category_name' => 'show',


  ];
  $args_events = [
    'post_type' => 'post',
    'category_name' => 'event',


  ];
  

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['shows'] = Timber::get_posts($args_shows);
  $context['events'] = Timber::get_posts($args_events);
  


// appelle la vue twig "template-event.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('page-39.twig', $context);