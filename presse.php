<?php
/*

Template Name: Presse

*/
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="row presspage entry-content" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer>
    <div class="small-12 medium-3 large-3 pimg columns"> &nbsp;</div>
    <div class="small-12 medium-9 large-9 press-text columns">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="row">
      <div class="small-6 medium-6 large-6 presse-footer columns" data-equalizer-watch>
        <div class="post-header">
          <h1 class="entry-title">
            <?php the_title(); ?>
          </h1>
        </div>
      </div>
      <div class="small-6 medium-6 large-6 presse-footer columns" data-equalizer-watch>
        <div class="small-2 large-12 show-for-large-up columns">&nbsp;</div>
        <div class="small-2 large-12 show-for-large-up columns">&nbsp;</div>
        <div class="small-2 large-4 show-for-large-up columns">&nbsp;</div>
        <div class="small-6 medium-6 large-4 columns">
          <p class="pftr text-left">Hent inspiration her og<br>
            få en god smag i munden</p>
        </div>
        <div class="small-6 medium-6 large-4 columns">
          <p class="pbtr text-right"><a class="button" target="_blank" href="http://www.enkopstorforskel.dk/wp-content/uploads/2015/09/Opskriftfolder.pdf">Download opskrifter</a></p>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="post-footer">
    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
    <span>
    <?php the_tags(); ?>
    </span> </div>
</article>
<?php endwhile;?>
<?php get_footer(); ?>