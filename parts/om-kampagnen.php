<div class="om-kampagnen">
  <div class="row" >
      <?php $query = new WP_Query( 'order=asc&cat=om-kampagnen&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="small-12 medium-4 large-4 kampagnen columns">
        <?php the_post_thumbnail( array(640,610) ); ?>
        <div class="kampagnen-text">
        <a href="#" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
  </div>
</div>