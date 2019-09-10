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
    'post_type' => 'spectacles',
    'meta_key' => 'dispo',
    'meta_value' => '1',
  ];
  $args_oldshows = [
    'post_type' => 'spectacles',
    'meta_key' => 'dispo',
    'meta_value' => '2',
  ];
  $args_soonshows = [
    'post_type' => 'spectacles',
    'meta_key' => 'dispo',
    'meta_value' => '3',
  ];
//  $args_dates = [
//    'post_type' => 'dates',
//    'order'=>'ASC',
//    'meta_key' => 'date_show',
//    'orderby' => 'date_show',
//
//  ];
  $args_membres = [
    'post_type' => 'membres',
    'meta_key' => 'priorite',
    'orderby' => 'priorite',
    'order'=>'ASC',


  ];
  $args_ref = [
    'post_type' => 'references',
//    'meta_key' => 'cp',
//    'orderby' => 'cp',
//    'order' => 'DESC',


  ];

  

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['shows'] = Timber::get_posts($args_shows);
//  $context['events'] = Timber::get_posts($args_dates);
  $context['soonshows'] = Timber::get_posts($args_soonshows);
  $context['oldshows'] = Timber::get_posts($args_oldshows);
  $context['membres'] = Timber::get_posts($args_membres);
  $context['references'] = Timber::get_posts($args_ref);




// appelle la vue twig "template-dates.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('page-39.twig', $context);