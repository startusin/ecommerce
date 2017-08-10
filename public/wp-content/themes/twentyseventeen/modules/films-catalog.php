<?php
add_action('init', function() {
    add_rewrite_rule('^films/?$', 'index.php?post_type=films', 'top');
    add_rewrite_rule('^films/page/([0-9]{1,})/?$', 'index.php?post_type=films&paged=$matches[1]', 'top');
});
