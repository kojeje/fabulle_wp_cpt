<?php
  /**
   * template name: actu
   * Template Post Type:  actus
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
    'post_type' => 'spectacles',
  ];
  $args_events = [
    'post_type' => 'dates',
    'order'=>'DESC',
    'meta_key' => 'date_show',
    'order_by' => 'date_show',

  ];
  $args_projets = [
    'post_type' => 'projets',
  ];
  $args_places = [
    'post_type' => 'places',
    'order' => 'DESC',
    'meta_key' => 'cp',
    'order_by' => 'cp',
  ];

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
//  $context['articles'] = Timber::get_posts($args_articles);
  $context['shows'] = Timber::get_posts($args_shows);
  $context['events'] = Timber::get_posts($args_events);
  $context['projets'] = Timber::get_posts($args_projets);
  $context['places'] = Timber::get_posts($args_places);

// appelle la vue twig "template-spectacles.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('template-actus.twig', $context);