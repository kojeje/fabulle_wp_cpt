<?php
  /**
   * template name: projet
   * Template Post Type: projets
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
    'category_name' => 'show'

  ];
  $args_articles2 = [
    'post_type' => 'post',
    'category_name' => 'event'
  ];

  $args_articles3 = [
    'post_type' => 'post',
    'category_name' => 'projet'
  ];

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
//  $context['articles'] = Timber::get_posts($args_articles);
  $context['shows'] = Timber::get_posts($args_shows);
  $context['events'] = Timber::get_posts($args_articles2);
  $context['projets'] = Timber::get_posts($args_articles3);

// appelle la vue twig "template-spectacles.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('template-projet.twig', $context);