
      <?php if ( have_posts() ) : ?> 
                
                <?php while ( have_posts() ) : the_post(); ?>
                       
                       <div id="blog-post"> <!-- lägg till klass för sticky, post class -->
                            
                            <?php if (post_class == is_sticky()) :?> 

                                    <a href="<?php the_permalink(); ?>"><div id="post-title"><?php the_title(); ?></div></a>
                                    <div id="post-date"><?php the_time('F j, Y g:i a'); ?></div>
                                    <div id="post-contents"><?php the_excerpt(); ?></div>
                                    <div id="post-author">Det här inlägget skapades av: <?php the_author(); ?> </div>
                                    <div id="numberOfComments"><a href="<?php the_permalink(); ?>/#comments" rel="m_PageScroll2id"><?php comments_number('inga kommentarer', '1 kommentar', '% kommentarer' ); ?></a></div>
                                    <div id="stickyPost"></div>
                            
                            <?php else : ?> 
                                
                                    <a href="<?php the_permalink(); ?>"><div id="post-title"><?php the_title(); ?></div></a>
                                    <div id="post-date"><?php the_time('F j, Y g:i a'); ?></div>
                                    <div id="post-contents"><?php the_excerpt(); ?></div>
                                    <div id="post-author">Det här inlägget skapades av: <?php the_author(); ?> </div>
                                    <div id="numberOfComments"><a href="<?php the_permalink(); ?>/#comments" rel="m_PageScroll2id"><?php comments_number('inga kommentarer', '1 kommentar', '% kommentarer' ); ?></a></div>
                       
      <?php endif; ?>
                        </div>
                        
                <?php endwhile; ?>
                   
                  <?php else : ?>
                	    
                	       <h1>Det finns inga poster ännu.</h1>
                    
                  <?php endif; ?>
            
      <div id="totalAmountOfPages"><p>Totalt antal sidor: <?php echo $wp_query -> max_num_pages; ?></p></div>
  
 