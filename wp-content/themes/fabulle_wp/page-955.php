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


  $args_events = [
    'post_type' => 'dates',


  ];
  $args_shows =[
    'post_type' => 'spectacles',
    'meta_key' => ('dispo'),
    'meta_value' => '2',
    'orderby' => 'priorite',
    'order' => 'DESC',





  ];
  $args_actus =[
    'post_type' => 'actus',
    'orderby' => 'date',
    'order' => 'ASC'

  ];

  $args_news =[
    'post_type' => 'page',
    'page_id' => 462,
  ];
  $args_contacts = [
  'post_type' => 'contacts'
];
  $args_searchs = [
    'post_type' => 'searchs'

  ];

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['searchs'] = Timber::get_posts($args_searchs);
// On crée un objet contenant les post_type 'contacts"
  $context['contacts'] = Timber::get_posts($args_contacts);


// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['shows'] = Timber::get_posts($args_shows);
  $context['events'] = Timber::get_posts($args_events);
  $context['actus'] = Timber::get_posts($args_actus);
  $context['url'] = $_SERVER["REQUEST_URI"];
//  $context['refs'] = Timber::get_posts($args_articles3);


  // appelle la vue twig "page-34.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('page-955.twig', $context);
