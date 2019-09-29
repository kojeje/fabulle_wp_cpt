<?php
  /*
  Template Name: Contact Form
  */


//OBLIGATOIRE : Récupère les variables globales de Wordpress
  $context = Timber::get_context();

// on récupère le contenu du post actuel grâce à TimberPost
  $post = new TimberPost();

// on ajoute la variable post (qui contient le post) à la variable
// qu'on enverra à la vue twig
  $context['post'] = $post;
// On crée une requête pour chercher les post_types 'contacts' qu'on inscrit dans une variable
  $args_contacts = [
    'post_type' => 'contacts'
  ]; $args_searchs = [
  'post_type' => 'searchs'

];

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
  $context['searchs'] = Timber::get_posts($args_searchs);
// On crée un objet contenant les post_type 'contacts"
  $context['contacts'] = Timber::get_posts($args_contacts);
// retourne l'email relative dans
// une variable
  $context['url'] = $_SERVER["REQUEST_URI"];


// appelle la vue twig "page-7.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('page-260.twig', $context);
