
    <?php get_header(); ?> <!-- hämtar innehållet i header-filen --> 
        
        <div id="content">
                    
            <?php if (is_category()) : ?>
                <?php get_template_part('content'); ?>
            <?php elseif(is_single()) : ?>
                <?php get_template_part('content','single'); ?>
            <?php elseif(is_search()) : ?>
                <?php get_template_part('content'); ?>
            <?php elseif(is_page()) : ?>
                <?php get_template_part('content', 'page'); ?>
            <?php else: ?>
                <?php get_template_part('content'); ?>
            <?php endif; ?>
             
        </div>
    
    <?php get_footer(); ?>    <!-- Hämtar innehållet i footer-filen -->

    
