<?php
/**
 * Custom ultimate posts widget template
 *
 * @version     2.0.0
 */
?>

<?php //if ($instance['before_posts']) : ?>
  <!-- <div class="upw-before">
    <?php //echo wpautop($instance['before_posts']); ?>
  </div> -->
<?php //endif; ?>

<?php printf( __( '<h2 class="widget-title">Management Presentations</h2>', 'nobelium' ), '/' ); ?>

<?php if ($upw_query->have_posts()) : ?>
  <?php while ($upw_query->have_posts()) : $upw_query->the_post(); ?>
    <?php $current_post = ($post->ID == $current_post_id && is_single()) ? 'active' : ''; ?>
      <ul>
        <li>
        <?php if (get_the_title() && $instance['show_title']) : ?>
        <a href="<?php the_permalink(); ?>">
          <h4><?php the_title(); ?></h4>
          <p>
              <?php if ($instance['show_date']) : ?>
                <?php echo get_the_time($instance['date_format']); ?>
              <?php endif; ?>
          </p>
        </a>
        <?php endif; ?>
      </li>
    </ul>
    <?php endwhile; ?>
    <!-- <div class="more"> -->
      <?php //printf( __( '<a href="/management-ppts/" class="btn btn-secondary"><i class="fa fa-chevron-right" aria-hidden="true"></i> More</a>', 'nobelium' ), '/' ); ?>
    <!-- </div> -->
<?php else : ?>
  <p class="upw-not-found">
    <?php _e('No posts found.', 'upw'); ?>
  </p>
<?php endif; ?>
<?php if ($instance['after_posts']) : ?>
  <div class="upw-after">
    <?php echo wpautop($instance['after_posts']); ?>
  </div>
<?php endif; ?>
