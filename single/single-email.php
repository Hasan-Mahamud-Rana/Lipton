<?php get_header(); ?>
<!-- content goes here email-->
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
  <?php $query = new WP_Query( 'order=asc&category_name=email-faq&post_type=faq&post_status=publish&paged='. get_query_var('paged')); ?>
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
<div class="courses">
      <div class="row">
        <div class="large-12 medium-12 columns text-center">
          <h1>We take testing seriously</h1>
          <h4>We test on 40 email clients and mobile devices</h4>
          <hr>
        </div>
        <div class="row">
          <div class="large-3 columns">
            <ul class="list-checked">
              <li> Apple Mail 6 <small class="platform">(OS X 10.8)</small> </li>
              <li> Lotus Notes 8 <small class="platform">(Windows XP)</small> </li>
              <li> Lotus Notes 8.5 <small class="platform">(Windows Vista)</small> </li>
              <li> Outlook 2000 <small class="platform">(Windows XP)</small> </li>
              <li> Outlook 2002/XP <small class="platform">(Windows Vista)</small> </li>
              <li> Outlook 2003 <small class="platform">(Windows XP)</small> </li>
              <li> Outlook 2007 <small class="platform">(Windows XP)</small> </li>
              <li> Outlook 2010 <small class="platform">(Windows Vista)</small> </li>
              <li> Outlook 2011 <small class="platform">(OS X 10.7)</small> </li>
              <li> Outlook 2013 <small class="platform">(Windows 7)</small> </li>
            </ul>
          </div>
          <div class="large-3 columns">
            <ul class="list-checked">
              <li> Thunderbird 3.0 <small class="platform">(Windows XP)</small> </li>
              <li> Thunderbird latest <small class="platform">(Windows 7)</small> </li>
              <li> AOL Mail <small class="platform">(Chrome)</small> </li>
              <li> AOL Mail <small class="platform">(Explorer)</small> </li>
              <li> AOL Mail <small class="platform">(Firefox)</small> </li>
              <li> Gmail <small class="platform">(Chrome)</small> </li>
              <li> Gmail <small class="platform">(Explorer)</small> </li>
              <li> Gmail <small class="platform">(Firefox)</small> </li>
              <li> Outlook.com <small class="platform">(Chrome)</small> </li>
              <li> Outlook.com <small class="platform">(Explorer)</small> </li>
            </ul>
          </div>
          <div class="large-3 columns">
            <ul class="list-checked">
              <li> Outlook.com <small class="platform">(Firefox)</small> </li>
              <li> Yahoo! Mail <small class="platform">(Chrome)</small> </li>
              <li> Yahoo! Mail <small class="platform">(Explorer)</small> </li>
              <li> Yahoo! Mail <small class="platform">(Firefox)</small> </li>
              <li> Android 2.3 <small class="platform">(Android 2.3)</small> </li>
              <li> Android 4.0 <small class="platform">(Android 4.0)</small> </li>
              <li> Gmail <small class="platform">(Android Browser)</small> </li>
              <li> Gmail App <small class="platform">(Android 4.0)</small> </li>
              <li> Outlook.com <small class="platform">(Android Browser)</small> </li>
              <li> iPad <small class="platform">(iOS 6)</small> </li>
            </ul>
          </div>
          <div class="large-3 columns">
            <ul class="list-checked">
              <li> iPad Retina <small class="platform">(iOS 7)</small> </li>
              <li> iPad Mini <small class="platform">(iOS 7)</small> </li>
              <li> iPhone 4s <small class="platform">(iOS 6)</small> </li>
              <li> iPhone 5 <small class="platform">(iOS 6)</small> </li>
              <li> iPhone 5s <small class="platform">(iOS 7)</small> </li>
              <li> iPhone 6 <small class="platform">(iOS 8)</small> </li>
              <li> iPhone 6 Plus <small class="platform">(iOS 8)</small> </li>
              <li> Gmail <small class="platform">(iOS 7)</small> </li>
              <li> Outlook.com <small class="platform">(iOS 7)</small> </li>
              <li> Windows Phone 8 </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="apply">
      <div class="row">
        <div class="large-6 large-centered small-12 columns">
         <h4>Ready to move forward?</h4>
         <a href="#" class="button tiny success">Order Now</a>
        </div>
      </div>
    </div>
<?php get_footer(); ?>