<?php
// Look Wordpress Posts
$loop = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'category_name' => "What's On",
));

while ( $loop->have_posts() ) : $loop->the_post();
?>

<?php if ( has_post_thumbnail() ) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>
<?php the_permalink(); ?>
<?php the_title(); ?>
<?php the_date('d.m.Y'); ?>
<?php the_excerpt(); ?> 
<?php // the_post_summary(); ?>
<?php // get_the_excerpt(); ?>
<?php echo get_the_category()[0]->cat_name; ?>

<?php
endwhile; wp_reset_query();
?>


<?php
function the_post_summary($length = 128, $string = '') {
    if ($string) {
        $content = $string;
    } else {
        $content = wp_strip_all_tags( get_the_content() );
    }
    if (strlen($content) > $length) {
        $content = substr($content, 0, $length) . '...';
    }
    echo $content;
}

// function my_excerpt_length($length) {
// 	return 20;
// }
// add_filter('excerpt_length', 'my_excerpt_length');


// $orderby = 'name';
// $order = 'asc';
// $hide_empty = false;
// $cat_args = array(
//     'orderby' => $orderby,
//     'order' => $order,
//     'hide_empty' => $hide_empty,
// );
// $product_categories = get_terms( 'product_cat', $cat_args );
// $separator = ' ';
// $output = '';
// $index = 0;
// if ( !empty( $product_categories ) ) {
//     foreach( $product_categories as $key => $category ) {
//         $index++;
//         if ( $category->name === "Uncategorized" ) {
//             break;
//         }
//         $output .= '<div></div>';
//     }
// }
?>


