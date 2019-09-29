<?php

$context = Timber::get_context();
$site = new TimberSite();
$context['site'] = Timber::get_posts($site);
Timber::render( 'views/search-results.twig', $context );
?>