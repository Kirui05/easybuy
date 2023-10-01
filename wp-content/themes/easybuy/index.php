<?php get_header() ?>

<?php
// Code to display when there are posts.
if (have_posts()):
    while (have_posts()):
        the_post();

        the_title();
        the_content();

    endwhile;
else:
    // Code to display when there are no posts.
    echo '<p>No posts found.</p>';
endif;

?>
<?php get_footer() ?>