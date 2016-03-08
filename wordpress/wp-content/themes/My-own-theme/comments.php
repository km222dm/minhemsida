
    <div id="comments">
        
        <?php if( have_comments() ) : ?>
        
                </br>
                </br>
                <div class="comments"><?php wp_list_comments(); ?></div>
                </br>

        <?php endif; ?>
        
                <?php comment_form(); ?>
    </div>