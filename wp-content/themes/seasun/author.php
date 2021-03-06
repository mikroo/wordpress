<?php
/**
 * The author archive template file.
 * @package SeaSun
 * @since SeaSun 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if ( have_posts() ) : ?>
<?php the_post(); ?>
  <div class="content-headline-wrapper">
    <div class="content-headline">
      <h1><?php printf( __( 'Author Archive: %s', 'seasun' ), '<span class="vcard">' . get_the_author() . '</span>' ); ?></h1>
<?php seasun_get_breadcrumb(); ?>
    </div>
  </div>
  <div class="container">
  <div id="main-content">
<?php rewind_posts(); ?>        
<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<div class="author-info">
		<div class="author-description">
			<h2><?php printf( __( 'About %s', 'seasun' ), get_the_author() ); ?></h2>
      <div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'seasun_author_bio_avatar_size', 60 ) ); ?>
		  </div>
			<p><?php the_author_meta( 'description' ); ?></p>
		</div>
		</div>
<?php endif; ?>
    <div id="content"<?php if (get_theme_mod('seasun_post_entry_format', seasun_default_options('seasun_post_entry_format')) != 'One Column') { ?> class="js-masonry"<?php } ?>> 
<?php while (have_posts()) : the_post(); ?>      
<?php if (get_theme_mod('seasun_post_entry_format', seasun_default_options('seasun_post_entry_format')) != 'One Column') {
get_template_part( 'content', 'grid' ); } else {
get_template_part( 'content', 'archives' ); } ?>
<?php endwhile; endif; ?>
    </div> <!-- end of content -->
<?php seasun_content_nav( 'nav-below' ); ?>
  </div>
<?php if (get_theme_mod('seasun_display_sidebar_archives', seasun_default_options('seasun_display_sidebar_archives')) == 'Display') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>