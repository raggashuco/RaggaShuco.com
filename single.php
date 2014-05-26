<?php
$post = $wp_query->post;
if ( in_category('blog') ) {
include(TEMPLATEPATH.'/single/blog.php');
} else {
include(TEMPLATEPATH.'/single/single.php');
}
?>
