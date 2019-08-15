<?php get_header(); ?>



<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post();?>
    <div class="container-fluid">
      <article class="row">
        <div class="banner col-md-4"><?php the_post_thumbnail(); ?></div>
        <h1 class="titre col-md-8"><?php the_title(); ?></h1>
        <p class="col-md-12">
          <?php the_content(); ?>
        </p>
      </article>
    </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
