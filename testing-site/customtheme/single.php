<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
        <?php if ( has_post_thumbnail() ) : ?>
          <figure class = "figure">
            <?php the_post_thumbnail(); ?>
            <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
          </figure>
        <?php endif; ?>
        <?php the_content(); ?>
      </article>
    <?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>