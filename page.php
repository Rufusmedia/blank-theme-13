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
                            <?php the_title(); ?>
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