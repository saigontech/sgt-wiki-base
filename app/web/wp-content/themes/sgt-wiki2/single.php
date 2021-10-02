<?php get_header(); ?>
<!--   main section -->
<div class="p-5 w-full mb-5">
    <?php if (have_posts()) : the_post(); ?>
        <p class="text-center text-3xl"><?php the_title() ?></p>
        <p class="text-center text-sm text-gray-500 mb-10">Posted by <a class="text-blue-500" href="#"><?php echo get_the_author() ?></a> <?php echo ' | ' . get_the_date() ?></p>
        <div class="mx-auto w-full px-5 py-3 border rounded shadow-md">
            <article>
                <!-- content -->
                <div class="container">
                    <?php the_content() ?>
                </div>
                <!-- tags -->
                <?php $tags = get_the_tags(); ?>
                <ul class="flex my-5 gap-x-1">
                    <?php foreach ($tags as $tag) : ?>
                        <li>
                            <a href="<?php echo get_tag_link($tag->term_id) ?>" class="p-2 text-sm rounded-full bg-blue-100 text-gray-700" rel="tag"><?php echo $tag->name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </article>
            <hr class="mb-5">
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>