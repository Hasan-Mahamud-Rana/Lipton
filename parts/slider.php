<div class="row showcase" data-equalizer>
  <div class="small-12 medium-6 large-6 columns panel shwl" data-equalizer-watch>
    <div class="slider">
      <?php $query = new WP_Query( 'order=asc&post_type=slide&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="large-12 medium-12 columns">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(420,260) ); ?></a>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        <?php the_excerpt(); ?>
      </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
</div>
<div class="small-12 medium-6 large-6 columns panel shwr" data-equalizer-watch>
  <div class="large-12 columns">
    <h5> We can help!</h5>
    <hr>
    <p>Pay a flat-rate price for your very own websites to be created by one of our website experts and get ONLY the features you need. </p>
  </div>
  <div class="large-12 columns">
    <h5> Virtual Hiring</h5>
    <hr>
    <p>You can hire resources directly from our pool of talents. We carefully assemble the team with the finest infrastructure as needed.</p>
  </div>
</div>
</div>