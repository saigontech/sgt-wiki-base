<?php get_header();?>
<!--   main section -->
<div class="p-5 mb-5">
    <!--Title-->
    <p class="text-center text-3xl mb-10">Browse categories</p>

    <!-- Card List -->
    <div class="container grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mx-auto gap-x-5 gap-y-5">
        <?php $categories = get_categories(); ?>
        <?php foreach($categories as $cat): ?>
            <?php get_template_part('includes/section', 'category-box', array('category' => $cat)); ?>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer();?>