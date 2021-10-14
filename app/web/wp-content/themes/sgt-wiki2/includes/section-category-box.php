<!-- card -->
<?php $cat = $args['category'] ?>
<!-- max length for category 3 lines in 15.6 inch -->
<?php $max_length_for_category = 74 ?>
<?php $posts = get_posts(array('posts_per_page' => 3, 'category' => $cat->cat_ID)); ?>
<div class="px-5 py-5 border rounded shadow-md">
    <p class="text-2xl mb-5"><?php
        if (strlen($cat->name) > $max_length_for_category)
        {
            $offset = ($max_length_for_category - 3) - strlen($cat->name);
            $cat->name = substr($cat->name, 0, strrpos($cat->name, ' ', $offset)) . '...';
        }
        echo $cat->name ?></p>
    <ul class="mb-5">
        <?php foreach($posts as $post): ?>
            <li class="flex gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <a class="hover:text-blue-300" href="<?php the_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
            </li>            
        <?php endforeach; ?>	
    </ul>

    <a class="block text-center mx-auto w-2/3 px-5 py-3 border border-green-400	rounded hover:border-red-400"
        href="<?php echo get_category_link($cat->cat_ID) ?>" alt="Explore">View All</a>
</div>
