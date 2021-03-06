<?php get_header(); ?>

<section class="main">
    <div class="container">
        <div class="four columns">
            <div class="sidebar-area">
                sidebar content here
            </div><!-- /.sidebar-area -->
        </div><!--  end .four.columns -->

        <div class="twelve columns">
            <div class="content-area">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="post">
                        <h2>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div><!-- /.post-content -->
                    </article><!-- end .post -->
                <?php endwhile; endif; ?>

            </div><!-- /.content-area -->
        </div><!--  end .four.columns -->
    </div><!--  end .container  --> 
</section>

<?php get_footer(); ?>