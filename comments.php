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
            <article class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <img src="assets/img/client-image/1.jpg" class="avatar" alt="image">
                        <b class="fn">John Jones</b>
                        <span class="says">says:</span>
                    </div>

                    <div class="comment-metadata">
                        <a href="#">
                            <time>April 24, 2019 at 10:59 am</time>
                        </a>
                    </div>
                </footer>

                <div class="comment-content">
                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>

                <div class="reply">
                    <a href="#" class="comment-reply-link">Reply</a>
                </div>
            </article>

            <ol class="children">
                <li class="comment">
                    <article class="comment-body">
                        <footer class="comment-meta">
                            <div class="comment-author vcard">
                                <img src="assets/img/client-image/2.jpg" class="avatar" alt="image">
                                <b class="fn">Steven Smith</b>
                                <span class="says">says:</span>
                            </div>

                            <div class="comment-metadata">
                                <a href="#">
                                    <time>April 24, 2019 at 10:59 am</time>
                                </a>
                            </div>
                        </footer>

                        <div class="comment-content">
                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>

                        <div class="reply">
                            <a href="#" class="comment-reply-link">Reply</a>
                        </div>
                    </article>
                </li>

                <ol class="children">
                    <li class="comment">
                        <article class="comment-body">
                            <footer class="comment-meta">
                                <div class="comment-author vcard">
                                    <img src="assets/img/client-image/3.jpg" class="avatar" alt="image">
                                    <b class="fn">Sarah Taylor</b>
                                    <span class="says">says:</span>
                                </div>

                                <div class="comment-metadata">
                                    <a href="#">
                                        <time>April 24, 2019 at 10:59 am</time>
                                    </a>
                                </div>
                            </footer>

                            <div class="comment-content">
                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>

                            <div class="reply">
                                <a href="#" class="comment-reply-link">Reply</a>
                            </div>
                        </article>
                    </li>
                </ol>
            </ol>
        </li>

        <li class="comment">
        <li class="comment">
            <article class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <img src="assets/img/client-image/4.jpg" class="avatar" alt="image">
                        <b class="fn">James Anderson</b>
                        <span class="says">says:</span>
                    </div>

                    <div class="comment-metadata">
                        <a href="#">
                            <time>April 24, 2019 at 10:59 am</time>
                        </a>
                    </div>
                </footer>

                <div class="comment-content">
                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>

                <div class="reply">
                    <a href="#" class="comment-reply-link">Reply</a>
                </div>
            </article>
        </li>
        </li>
    </ol>

    <div class="comment-respond">
        <h3 class="comment-reply-title">Leave a Reply</h3>

        <form class="comment-form">
            <p class="comment-notes">
                <span id="email-notes">Your email address will not be published.</span>
                Required fields are marked
                <span class="required">*</span>
            </p>
            <p class="comment-form-comment">
                <label>Comment</label>
                <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
            </p>
            <p class="comment-form-author">
                <label>Name <span class="required">*</span></label>
                <input type="text" id="author" name="author" required="required">
            </p>
            <p class="comment-form-email">
                <label>Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required="required">
            </p>
            <p class="comment-form-url">
                <label>Website</label>
                <input type="url" id="url" name="url">
            </p>
            <p class="comment-form-cookies-consent">
                <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
            </p>
            <p class="form-submit">
                <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
            </p>
        </form>
    </div>
</div>