<?php
/*
Template Name: Opskrifter
*/
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="row entry-content">    
    <div class="small-12 medium-6 large-6 opskrifter-text columns">
      <div class="opskrifter entry-content">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="small-12 medium-6 large-6 ops opskrifter columns" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">&nbsp;</div>
  </div>
  <?php endif; ?>
  <div class="post-footer">
    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
    <span><?php the_tags(); ?></span>
  </div>
</article>
<?php endwhile;?>
<footer class="mop">
<div class="row">
<div class="small-12 medium-6 large-6 columns">
</div>
<div class="small-12 medium-6 large-6 columns">
  <ul class="partner">
    <li><a class="bki" href="http://www.bki.dk" target="_blank"></a></li>
    <li><a class="lipton" href="http://www.lipton.dk" target="_blank"></a></li>
    <li><a class="stot" href="http://www.stoetbrysterne.dk" target="_blank"></a></li>
  </ul>
</div>
</footer>
<?php get_footer(); ?>