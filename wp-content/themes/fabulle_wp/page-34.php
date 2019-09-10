<?php



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
  $args_articles = [
    'post_type' => 'spectacles',
    'orderby' => 'priorite',
    'order' => 'ASC'
  ];

  $args_articles2 = [
    'post_type' => 'dates',


  ];
  $args_articles8 =[
    'post_type' => 'spectacles',
    'meta_key' => ('dispo'),
    'meta_value' => '2',
//    'meta_key' => 'priorite',
    'orderby' => 'priorite',
    'order' => 'DESC',





  ];
  $args_articles9 =[
    'post_type' => 'spectacles',
    'meta_key' => 'dispo',
    'meta_value' => '3',
    'orderby' => 'priorite',
    'order' => 'ASC'



  ];
//  $args_articles3 = [
//    'post_type' => 'post',
//    'category_name' => 'reference'
//  ];


// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['shows'] = Timber::get_posts($args_articles);
  $context['events'] = Timber::get_posts($args_articles2);
  $context['oldshows'] = Timber::get_posts($args_articles8);
  $context['soonshows'] = Timber::get_posts($args_articles9);
//  $context['refs'] = Timber::get_posts($args_articles3);



  // appelle la vue twig "page-34.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('page-34.twig', $context);