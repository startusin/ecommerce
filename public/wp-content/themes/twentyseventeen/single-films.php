<?php get_header(); ?>
<?php
$id = get_the_ID();
$item_id = get_post_meta($id, 'shop_item_id');
$post_data = get_post();
?>
<div class="wrap">
    <h2><strong>Film name:</strong> <?php echo $post_data->post_title; ?></h2>
    <p><strong><?php echo $post_data->post_excerpt; ?></strong></p>
    <p><?php echo $post_data->post_content; ?></p>
    <a class="buy-button" href="/checkout/?add-to-cart=<?php echo $item_id[0]; ?>">Buy <?php echo $post_data->post_title; ?></a>
</div>
<?php get_footer(); ?>
