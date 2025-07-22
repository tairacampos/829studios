<?php 
get_header();
$fallback_photo = wp_get_attachment_image_src(51, '16-9');
?>

<section class="section">
  <div class="container">
    <h1 class="title has-text-centered has-text-primary-00">
      Photography Portfolio
    </h1>

    <?php if (have_posts()) : ?>
      <div class="columns is-multiline is-mobile">
        <?php while (have_posts()) : the_post(); ?>
          <div class="column is-3-desktop is-4-tablet is-12-mobile">
            <div class="box">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <figure class="image">
                        <?php the_post_thumbnail('16-9', ['class' => 'image is-fullwidth']); ?>
                    </figure>
                <?php else : ?>
                  <figure class="image">
                    <img src="<?php echo esc_url($fallback_photo[0]); ?>" alt="Default image">
                    <!-- <img src="http://829codeproject.local/wp-content/uploads/2025/07/9ee53390-797a-37df-bd42-a541ace46f66.jpg" alt="Default image"> -->
                  </figure>
                <?php endif; ?>
              </a>

              <h2 class="title is-5 mt-3">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <p class="is-size-7 has-text-grey">
                Date <?php echo get_the_date(); ?> by <?php the_author(); ?>
              </p>

              <?php 
                $photo_credit = get_field('photo_credit');
                $location = get_field('photo_location');
                if ($photo_credit || $location) : 
                ?>
                <p class="is-size-7 has-text-grey">
                    <?php if ($photo_credit) : ?>
                    <strong>Photo Credit:</strong> <?php echo esc_html($photo_credit); ?>
                    <?php endif; ?>

                    <?php if ($photo_credit && $location) : ?> &nbsp;|&nbsp; <?php endif; ?>

                    <?php if ($location) : ?>
                    <strong>Location:</strong> <?php echo esc_html($location); ?>
                    <?php endif; ?>
                </p>
                <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <nav class="pagination is-centered mt-5" role="navigation" aria-label="pagination">
        <div class="pagination-previous"><?php previous_posts_link('Previous'); ?></div>
        <div class="pagination-next"><?php next_posts_link('Next'); ?></div>
      </nav>

    <?php else : ?>
      <p class="has-text-centered">No posts found.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>