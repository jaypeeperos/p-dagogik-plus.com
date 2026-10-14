<?php
/**
 * The template for displaying all single resourcen posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BuddyBoss_Theme
 */

get_header();

$download_link = get_field('download_link');
?>
	<div id="primary" class="content-area">
    <main id="main" class="site-main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">

              <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>
          
          <?php if (has_post_thumbnail()) : ?>
            <div class="entry-media">
              <div class="entry-img">
                  <?php the_post_thumbnail('full'); ?>
              </div>
            </div>
          <?php endif; ?>

          <div class="entry-content">
              <?php
              the_content();

              if ( $download_link ) {
                echo '<a class="resource-download-link" href="' . $download_link . '">Download</a>';
              } 
              ?>
          </div>

      </article>
    </main>
  </div>

<?php
get_footer();
