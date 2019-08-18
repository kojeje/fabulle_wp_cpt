<?php

//OBLIGATOIRE : Récupère les variables globales de Wordpress
  $context = Timber::get_context();

// on récupère le contenu du post actuel grâce à TimberPost
  $post = new TimberPost();

// on ajoute la variable post (qui contient le post) à la variable
// qu'on enverra à la vue twig
  $context['post'] = $post;


//// tableau d'arguments pour modifier la requête en base
//// de données, et venir récupérer uniquement les trois
//// derniers articles
//
  $args_articles =[
    'post_type' => 'spectacles',
//    'posts_per_page' => 1,

  ];
  $args_articles2 =[
    'post_type' => 'spectacles',
  ];
  $args_articles3 = [
    'post_type' => 'dates',
    'order'=>'DESC',
    'meta_key' => 'public',
    'meta_value' => 'true',
    'order_by' => 'date_show',
  ];
  $args_articles4 = [
    'post_type' => 'dates',
    'order'=>'ASC',
//    'meta_key' => 'public',
//    'meta_value' => 'true',
    'order_by' => 'date_show',
    'posts_per_page' => 1,
  ];
  $args_articles5 = [
  'post_type' => 'actus',
  'order'=>'ASC',
  'orderby' => 'date',
  'posts_per_page' => 1,
];
  $args_articles6 = [
    'post_type' => 'places',
    'order'=>'ASC',
    'orderby' => 'date',
    'posts_per_page' => 1,
  ];


// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['oneshows'] = Timber::get_posts($args_articles);
  $context['shows'] = Timber::get_posts($args_articles2);
  $context['events'] = Timber::get_posts($args_articles3);
  $context['oneevents'] = Timber::get_posts($args_articles4);
  $context['actus'] = Timber::get_posts($args_articles5);
  $context['places'] = Timber::get_posts($args_articles6);
//  var_dump($context['oneevents']);die;




// appelle la vue twig "page-7.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('page-7.twig', $context);
