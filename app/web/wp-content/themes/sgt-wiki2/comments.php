<!-- You can start editing here. -->
<p class="text-2xl mb-5">Comments</p>
<ol class="mb-10">
    <?php if (have_comments()) : ?>
        <?php
        $comments = get_comments(array(
            'post_id' => $post->ID,
            'status' => 'approve'
        ));
        ?>
        <?php foreach ($comments as $comment) : ?>
            <li class="mb-2">
                <div class="flex gap-x-1 items-center mb-2">
                    <img class="h-7 w-7" src="<?php echo get_avatar_url($comment->comment_author_email, 32) ?>" />
                    <a href="<?php echo $comment->comment_author_url ?>"><span class="text-blue-500"><?php echo $comment->comment_author ?></span></a>
                    <a class="text-sm text-gray-500" href="#"><?php echo $comment->comment_date ?></a>
                    <!-- <div class="flex gap-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <a class="text-blue-500" href="#">(Edit)</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                        </svg>
                        <a class="text-blue-500" rel='nofollow' href='#'>Reply</a>
                    </div> -->
                </div>
                <p><?php echo $comment->comment_content ?></p>
            </li><!-- #comment-## -->
        <?php endforeach ?>

    <?php endif; // have_comments() 
    ?>
</ol>

<!-- comment form -->
<?php comment_form(); ?>