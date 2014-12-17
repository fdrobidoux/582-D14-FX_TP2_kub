<?php
define('__PAGE_NAME__',basename(__FILE__));
get_header();
?>
    <main role="main">
        <?php

        if ( have_posts()){

            while(have_posts()){

                the_post();

                ?>
                <article>
                    <header>
                        <h2><?php the_title(); ?></h2>
                        <time datetime="<?php echo get_the_date('Y-m-d')?>"><?php echo get_the_date(get_option('date_format'))?></time>
                        <?php edit_post_link( __( 'Edit', 'mcintranet' ) ); ?>
                    </header>
                    <?php
                    the_content();
                    ?>
                    <footer>
                    </footer>
                </article>
            <?php
            }
        }

        ?>
    </main>
    <aside>
        <?php
        //get_sidebar('tasks');
        ?>
    </aside>
<?php
get_footer();
