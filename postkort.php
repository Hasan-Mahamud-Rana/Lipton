<?php
/*
Template Name: Postkort
*/
get_header(); ?>
 
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="row postcard entry-content" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer>
    <div class="small-3 medium-4 large-3 columns" data-equalizer-watch></div>
    <div class="small-9 medium-8 large-9 postcard-text columns" data-equalizer-watch>
      <div class="Postkort entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="post-footer">
    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
    <span><?php the_tags(); ?></span>
  </div>
</article>
<?php endwhile;?>
 
<div class="row pform">
<div class="small-12 medium-8 large-8 cradform columns">
  <?php if(function_exists('display_ecardMe')) echo display_ecardMe(); ?>
</div>
<div class="small-12 medium-4 large-4 columns">
<ul class="gtea">
    <li><a class="alltea" href="/produktsortiment"></a></li>
  </ul>
</div>
</div>
<?php get_footer(); ?>