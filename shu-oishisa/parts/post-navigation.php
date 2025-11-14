<?php
$prev_post = get_previous_post();
$next_post = get_next_post();

function render_post_nav_item($post, $direction) {
  if ($post) {
    $url = esc_url(get_permalink($post->ID));
    $label = $direction === 'prev' ? '前へ' : '次へ';
    $classes = 'post-nav post-nav--' . $direction;
    ?>
    <a href="<?php echo $url; ?>" class="<?php echo esc_attr($classes); ?>">
      <?php echo $label; ?>
    </a>
    <?php
  } else {
    echo '<span class="post-nav--empty"></span>';
  }
}
?>

<?php render_post_nav_item($prev_post, 'prev'); ?>
<?php render_post_nav_item($next_post, 'next'); ?>