<?php get_header(); ?>
<?php
get_template_part(
    'components/heros/home-hero',
    null,
    [
        'heading' => 'Paul Phan',
        'body' => 'Developer'
    ]
);
get_template_part('components/recent-works');
get_template_part('components/recent-posts');
?>
<?php get_footer();
