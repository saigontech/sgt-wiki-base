<?php get_header();?>
<!--   main section -->
<div class="p-5 w-full mb-5">
    <p class="text-center text-3xl mb-10"><?php echo single_cat_title('', false) ?></p>
    <div class="mx-auto w-3/4 px-5 py-5 border rounded shadow-md">
        <ul class="flex flex-col gap-y-3">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <li class="flex gap-x-2"> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </li>            
            <?php endwhile; else: endif; ?>
        </ul>
        <!-- <a class="mt-10 block mx-auto w-2/3 text-center px-5 py-3 border border-green-400	rounded" href="#"
            alt="Explore">View All</a> -->
    </div>
</div>
<?php get_footer();?>