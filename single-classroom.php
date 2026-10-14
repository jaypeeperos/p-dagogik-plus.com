<?php
/**
 * The template for displaying all single classroom posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BuddyBoss_Theme
 */

get_header();

$featured_img_style = buddyboss_theme_get_option( 'blog_featured_img' );
?>
	<?php 
	$share_box = buddyboss_theme_get_option( 'blog_share_box' );
	if ( !empty( $share_box ) && is_singular('post') ) :
		get_template_part( 'template-parts/share' ); 
	endif;
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				do_action( THEME_HOOK_PREFIX . '_template_parts_content_top' );

				while ( have_posts() ) :
					the_post();

          $is_group_2 = get_field('is_group_2');
          $link = get_field('link');
					$button_label = get_field('button_label');
					$title = get_the_title();
					$teacher_name = get_field('teacher');
					$teacher_image = get_field('teacher_image');
					$teacher_details = get_field('teacher_details');
          
					$teacher2_name = get_field('teacher2');
					$teacher2_image = get_field('teacher2_image');
					$teacher2_details = get_field('teacher2_details');
          
					$teacher3_name = get_field('teacher3');
					$teacher3_image = get_field('teacher3_image');
					$teacher3_details = get_field('teacher3_details');
          
					$teacher4_name = get_field('teacher4');
					$teacher4_image = get_field('teacher4_image');
					$teacher4_details = get_field('teacher4_details');
          
					$materials = get_field('materials');
					$articles = get_field('articles');
					$videos = get_field('videos');

          $post_id = get_the_ID();

          // Additional links
          $additional_links = array(
            'Elternarbeit', 'Konflikte', 'Beurteilung', 'Medien', 'Zusammenarbeit',
            'Delikte', 'Übertritt', 'Selbstregulation', 'Aggression', 'Klassendynamik', 'Burnout', 'Lernen', 'Schulverweigerung', 'Integration'
          );
          
           // Kinder Additional links
          $kinder_additional_links = array(
            'Interessen', 'Materialien', 'Kontakt'
          );
          

					// Get tags
					$tags = get_the_tags();
          ?>

          <div class="entry-content classroom-content">
            <div class="container with-classroom-sidebar">
                <div class="classroom-sidebar-wrapper">
                  <?php
                  // Add the feature image
                  if (has_post_thumbnail()) {
                      echo '<div class="classroom-post-thumbnail">';
                      the_post_thumbnail('medium', array('class' => 'img-fluid'));
                      echo '</div>';
                  }
                  ?>
                  <div class="classroom-sidebar-post-title">
                    <?php the_title('<h3 class="classroom-post-title entry-title">', '</h3>'); ?>
                  </div>
                  <div class="classroom-content-menu">
                    <ul class="sidebar-links">
                      <li>
                        <a class="for-general-content-link active" href="javascript:void(0);">General information</a>
                      </li>
                      <li>
                        <a class="for-teacher-content-link" href="javascript:void(0);">
                        <?php 
                          echo ( $teacher2_name ? 'Coaches' : 'Coach' );
                        ?>
                        </a>
                      </li>
                      <!--<li>
                        <a class="for-articles-content-link" href="javascript:void(0);">Articles</a>
                      </li>
                      <li>
                        <a class="for-materials-content-link" href="javascript:void(0);">Materials</a>
                      </li>-->
                      <li>
                        <a class="for-videos-content-link" href="javascript:void(0);">Videos</a>
                      </li>
                      <?php
                      
                        if ( $post_id == 21098 ) {
                          /*echo '<li>
                            <a class="for-feed-content-link" href="javascript:void(0);">Kommentare</a>
                          </li>';*/
                        }
                      
                      ?>
                      <?php

                      //this link is for Lehrkraftraum
                      if ( $post_id == 20585 ) {

                        foreach ($additional_links as $link) {
                          echo '<li><a class="for-' . sanitize_title($link) . '-content-link" href="javascript:void(0);">' . $link . '</a></li>';
                        }

                      }

                      if ( $is_group_2 ) {

                        //for kinder
                        foreach ($kinder_additional_links as $link) {
                          echo '<li><a class="for-' . sanitize_title($link) . '-content-link" href="javascript:void(0);">' . $link . '</a></li>';
                        }

                      }
                      ?>
                    </ul>
                  </div>
                </div>
                <div class="row classroom-content-wrapper">
                    <div class="col-md-8 offset-md-2">
                      <div class="classroom-general-content active">
                        <div>
                          <?php the_title('<h2 class="classroom-post-title entry-title">', '</h2>'); ?>
                        </div>
                        <div class="classroom-post-tags">
                          <ul>
                        <?php 
                          if ($tags) {
                              foreach ($tags as $tag) {
                                  echo '<li>' . $tag->name . '</li>';
                              }
                          }
                        ?>
                        </ul>
                        </div>
                          <?php the_content(); ?>
                          <?php 
                          // If comments are open or we have at least one comment, load up the comment template.
                          if ( $post_id == 21098 &&  ( comments_open() || get_comments_number()) ) :
                              comments_template();
                          endif;
                          ?>
                      </div>
                      <div class="classroom-feed-content">
                        <h3>Kommentare</h3>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                           // comments_template();
                        endif;
                        ?>
                      </div>
                      <div class="classroom-teacher-content">
                      <?php
                      $teachers = array(
                        array('name' => $teacher_name, 'image' => $teacher_image, 'details' => $teacher_details),
                        array('name' => $teacher2_name, 'image' => $teacher2_image, 'details' => $teacher2_details),
                        array('name' => $teacher3_name, 'image' => $teacher3_image, 'details' => $teacher3_details),
                        array('name' => $teacher4_name, 'image' => $teacher4_image, 'details' => $teacher4_details)
                      );

                      foreach ($teachers as $teacher) {
                        if (!empty($teacher['name'])) {
                          ?>
                          <div class="teacher-info">
                            <p class="text-center mb-5">
                              <img class="avatar-image" style="width: 100px" src="<?php echo $teacher['image']; ?>">
                            </p>
                            <p class="text-center mb-5">
                              <?php echo $teacher['name']; ?>
                            </p>
                            <?php echo '<p>' . nl2br($teacher['details']) . '</p>'; ?>
                          </div>
                          <?php
                        }
                      }
                      ?>
                    </div>
                      <div class="classroom-articles-content">
                        <h3>Articles</h3>
                        <?php if ($articles): ?>
                          <div class="article-grid">
                            <?php foreach ($articles as $article): ?>
                              <div class="article-item">
                                <?php if (has_post_thumbnail($article->ID)): ?>
                                  <div class="article-thumbnail">
                                    <a href="<?php echo get_permalink($article->ID); ?>">
                                      <?php echo get_the_post_thumbnail($article->ID, 'medium'); ?>
                                    </a>
                                  </div>
                                <?php endif; ?>
                                <div class="article-content">
                                  <h4><a href="<?php echo get_permalink($article->ID); ?>"><?php echo esc_html($article->post_title); ?></a></h4>
                                  <div class="article-excerpt">
                                    <?php echo wp_trim_words($article->post_content, 20, '...'); ?>
                                  </div>
                                  <a href="<?php echo get_permalink($article->ID); ?>" class="read-more">Read More</a>
                                </div>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        <?php else: ?>
                          <p>Gerne posten wir hier dein Material oder Artikel zu diesem Thema: <a href="mailto:info@paedagogik-plus.com">info@paedagogik-plus.com</a></p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                      </div>
                      <div class="classroom-materials-content">
                        <h3>Materials</h3>
                        <!-- Add your materials content here -->
                         <?php 
                          if ( $materials ) {
                            echo do_shortcode( $materials );
                          } else {
                            echo '<p>Gerne posten wir hier dein Material oder Artikel zu diesem Thema: <a href="mailto:info@paedagogik-plus.com">info@paedagogik-plus.com</a></p>';
                          }
                        ?>
                      </div>
                      <div class="classroom-videos-content">
                        <h3>Videos</h3>
                        <!-- Add your videos content here -->
                        <?php echo do_shortcode( $videos );?>
                      </div>
                      <?php
                      //for Lehrkraftraum
                      if ( $post_id == 20585 ) {
                        foreach ($additional_links as $link) {

                            $link_key = $link;//str_replace('Ü','u', $link);
                            
                            // Get posts with category slug $link_key
                            $args = array(
                                'category_name' => sanitize_title($link_key),
                                'posts_per_page' => -1,
                                'orderby' => 'date',
                                'order' => 'DESC'
                            );

                            $contents = get_posts($args);

                            echo '<div class="classroom-' . sanitize_title($link) . '-content">';
                            echo '<div class="classroom-title-and-link"><h2 class="classroom-category-title">' . $link . '</h2><a class="classroom-link" href="mailto:info@paedagogik-plus.com">Sende uns deine Frage?</a><div class="clear clear_fix"></div></div><div class="clear clear_fix"></div>';
                            
                            if ($contents): ?>
                                <div class="article-grid">
                                    <?php foreach ($contents as $content): ?>
                                        <div class="article-item">
                                            <?php if (has_post_thumbnail($content->ID)): ?>
                                                <div class="article-thumbnail">
                                                    <a href="<?php echo get_permalink($content->ID); ?>">
                                                        <?php echo get_the_post_thumbnail($content->ID, 'medium'); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="article-content">
                                                <h4><a href="<?php echo get_permalink($content->ID); ?>"><?php echo esc_html($content->post_title); ?></a></h4>
                                                <div class="article-excerpt">
                                                    <?php echo wp_trim_words($content->post_content, 20, '...'); ?>
                                                </div>
                                                <a href="<?php echo get_permalink($content->ID); ?>" class="read-more">Read More</a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <p>Gerne posten wir hier dein Material oder Artikel zu diesem Thema: <a href="mailto:info@paedagogik-plus.com">info@paedagogik-plus.com</a></p>
                            <?php endif;

                            echo '
                            <div class="classroom-send-link">
                              <img src="https://xn--pdagogik-plus-bfb.com/wp-content/uploads/2024/09/2.png" class="vc_single_image-img attachment-full" />
                              <a class="classroom-link" href="mailto:info@paedagogik-plus.com">Sende uns deine Frage?</a>
                            </div>';
                            echo '</div>';

                            wp_reset_postdata();
                        }
                      }
                      ?>

                      <?php
                      if ( $is_group_2 ) {
                        foreach ($kinder_additional_links as $link) {

                            $link_key = $link;//str_replace('Ü','u', $link);
                            
                            // Get posts with category slug $link_key
                            $args = array(
                                'category_name' => sanitize_title($link_key),
                                'posts_per_page' => -1,
                                'orderby' => 'date',
                                'order' => 'DESC'
                            );

                            $contents = get_posts($args);

                            echo '<div class="classroom-' . sanitize_title($link) . '-content">';
                            echo '<div class="classroom-title-and-link"><h2 class="classroom-category-title">' . $link . '</h2><a class="classroom-link" href="mailto:info@paedagogik-plus.com">Sende uns deine Frage?</a><div class="clear clear_fix"></div></div><div class="clear clear_fix"></div>';
                            
                            if ($contents): ?>
                                <div class="article-grid">
                                    <?php foreach ($contents as $content): ?>
                                        <div class="article-item">
                                            <?php if (has_post_thumbnail($content->ID)): ?>
                                                <div class="article-thumbnail">
                                                    <a href="<?php echo get_permalink($content->ID); ?>">
                                                        <?php echo get_the_post_thumbnail($content->ID, 'medium'); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="article-content">
                                                <h4><a href="<?php echo get_permalink($content->ID); ?>"><?php echo esc_html($content->post_title); ?></a></h4>
                                                <div class="article-excerpt">
                                                    <?php echo wp_trim_words($content->post_content, 20, '...'); ?>
                                                </div>
                                                <a href="<?php echo get_permalink($content->ID); ?>" class="read-more">Read More</a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <p>Gerne posten wir hier dein Material oder Artikel zu diesem Thema: <a href="mailto:info@paedagogik-plus.com">info@paedagogik-plus.com</a></p>
                            <?php endif;

                            echo '
                            <div class="classroom-send-link">
                              <img src="https://xn--pdagogik-plus-bfb.com/wp-content/uploads/2024/09/2.png" class="vc_single_image-img attachment-full" />
                              <a class="classroom-link" href="mailto:info@paedagogik-plus.com">Sende uns deine Frage?</a>
                            </div>';
                            echo '</div>';

                            wp_reset_postdata();
                        }
                      }
                      ?>
                      
                    </div>
                </div>
            </div>
          </div>

          <script>
          document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.sidebar-links a');
            const contents = document.querySelectorAll('.classroom-content-wrapper > div > div');

            function showContent(contentClass) {
              contents.forEach(el => el.classList.remove('active'));
              links.forEach(el => el.classList.remove('active'));
              
              const content = document.querySelector('.' + contentClass);
              const link = document.querySelector('.for-' + contentClass.replace('classroom-', '') + '-link');
              
              if (content) content.classList.add('active');
              if (link) link.classList.add('active');

            }

            links.forEach(link => {
              link.addEventListener('click', function() {
                const contentClass = this.className.replace('for-', 'classroom-').replace('-link', '');
                showContent(contentClass);
              });
            });

            // Show general information by default
            showContent('classroom-general-content');
          });
          </script>

          <style>
          .classroom-content-wrapper > div > div {
            display: none;
          }

          .classroom-content-wrapper > div > div.active {
            display: block;
          }

          .sidebar-links a.active {
            font-weight: bold;
            color: #007bff; /* You can change this to match your theme's color scheme */
          }
          </style>

          <?php

				endwhile; // End of the loop.

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();