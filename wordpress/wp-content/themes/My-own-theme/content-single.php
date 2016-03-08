
        <?php if ( have_posts() ) : ?> 
                
                <?php while ( have_posts() ) : the_post(); ?>
                       
                       <div id="blog-post">
                            <a href="<?php the_permalink(); ?>"><div id="post-title"><?php the_title(); ?></div></a>
                            <br/>
                            <div id="post-date"><?php the_time('F j, Y g:i a'); ?></div>
                            <div id="post-contents"><?php the_content(); ?></div>
                            <div id="post-author"><p>This post was written by <?php the_author (); ?></p></div>
                            <div id="numberOfCommentsSingle"><?php comments_number('inga kommentarer', '1 kommentar', '% kommentarer' ); ?></div>
                            </br>
                            <?php comments_template(); ?>
                            </br>
                        </div>
                    
                <?php endwhile; ?>
                   
                <?php else : ?>
                	    
                	        <h1>Det finns inga poster ännu.</h1>
        <?php endif; ?>
                