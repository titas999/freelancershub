<div class="comments-area">
    <h3 class="comments-title">
        <?php
        $freelancershub_comment_count = get_comments_number();
        if ($freelancershub_comment_count<=1) {
            printf(
                $freelancershub_comment_count .' '.
                esc_html__( 'Comment', 'freelancershub' )
            );
        } else {
            printf(
                $freelancershub_comment_count.' '.
                esc_html__( 'Comments', 'freelancershub' )
            );
        }
        ?>
    </h3>

    <ol class="comment-list">
        <li class="comment">
            <?php $args = array(
                'walker'            => new Walker_Comment(),
                'max_depth'         => '3',
                'style'             => 'ul',
                'type'              => 'all',
                'reply_text'        => 'Reply',
                'page'              => '',
                'per_page'          => '',
                'avatar_size'       => 80,
                'reverse_top_level' => null,
                'reverse_children'  => '',
                'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                'short_ping'        => false,   // @since 3.6
                'echo'              => true     // boolean, default is true
            );
            wp_list_comments($args); ?>
            <br>
            <?php the_comments_navigation();

            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() ) :
                ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'freelancershub' ); ?></p>
            <?php
            endif;
            ?>
        </li>

    </ol>

    <div class="comment-respond">
        <?php comment_form(); ?>
    </div>
</div>