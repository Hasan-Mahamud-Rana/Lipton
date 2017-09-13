<?php
/*
Template Name: Produktsortiment
*/
get_header(); ?>
 
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="row produktpage entry-content" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer>    
    <div class="small-12 medium-6 large-6 product-text columns" data-equalizer-watch>
      <div class="post-header">
        <h1 class="entry-title">
          <?php the_title(); ?>
        </h1>
      </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="small-12 medium-6 large-6 columns" data-equalizer-watch></div>
	
  </div>
  <?php endif; ?>
  <div class="post-footer">
  
    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
    <span><?php the_tags(); ?></span>
  </div>
</article>
<?php endwhile;?>
<footer class="produktpage-footer">
<div class="row ">
<div class="small-12 medium-12 large-12 columns plist">
<h2>Produktsortiment</h2>
<h3>Lipton klassisk te</h3>
<div class="desktop-gallery"><?php echo do_shortcode('[gallery columns="7" link="none" ids="114,113,112,111,110,109,108,107,106,97,98,99,100,101,102,103,104,105,95"]'); ?>
</div>
<div class="mobile-gallery"><?php echo do_shortcode('[gallery columns="3" link="none" ids="114,113,112,111,110,109,108,107,106,97,98,99,100,101,102,103,104,105,95"]'); ?>
</div>
</div>
<div class="small-12 medium-12 large-12 columns plist ">
<h3>Lipton Pyramide te</h3>
<div class="desktop-gallery"><?php echo do_shortcode('[gallery link="none" columns="7" ids="76,79,87,82,81,85,80,221"]'); ?></div>
<div class="mobile-gallery"><?php echo do_shortcode('[gallery link="none" columns="3" ids="76,79,87,82,81,85,80,221"]'); ?></div>
</div>
</div>
<div class="row prfooter ">
<div class="small-2 medium-6 large-4 columns prfooterc">
  <ul class="partner"><li><a class="bki" href="http://www.bki.dk" target="_blank"></a></li></ul>
</div>
<div class="small-10 medium-6 large-4 columns prfooterc">
  <a href="http://www.bki.dk" target="_blank" class="button">Klik her for at<br>bestille produkter</a>
</div>
<div class="large-4 columns show-for-medium-up">
</div>
</div>
</footer>
<?php get_footer(); ?>