<?php get_header(); ?>
<!-- content goes here hello e-commerce-->
<div class="row">
  <div class="small-12 large-12 columns" role="main">
    <?php do_action( 'bordingweb_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="courses">
       <div class="row">
        <div class="large-12 small-12 columns text-center">
         <div class="post-header"><h3><?php the_title(); ?></h3>  </div>
       </div>
     </div>
     <div class="entry-content">
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="row">
          <!--<div class="column">
            <?php //the_post_thumbnail( '', array('class' => 'th') ); ?>
          </div> -->
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="small-12 large-8 large-centered columns ">
          <?php the_content(); ?>
        </div> 
      </div>
    </div>
    <div class="post-footer">
      <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'bordingweb' ), 'after' => '</p></nav>' ) ); ?>
      <p><?php the_tags(); ?></p>
    </div>
  </div>
</article>
<?php endwhile;?>
<?php do_action( 'bordingweb_after_content' ); ?>
</div>
</div>
<div class="questions">
  <?php $query = new WP_Query( 'order=asc&category_name=e-commerce-faq&post_type=faq&post_status=publish&paged='. get_query_var('paged')); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="row">
    <div class="large-12 medium-12 columns">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(960,320) ); ?></a>
      <h1><?php the_title();?></h1>
    </div>
  </div>
  <div class="row">  
    <div class="large-12 medium-12 columns">
     <?php the_content(); ?>
   </div>
 </div>
<?php endwhile;  wp_reset_postdata(); else : ?>
 <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>