	<!--footer-->
	<div class="footer">
		<?php wp_footer(); ?>
		<div class="footer-content">
			<!--footer left-->
			<div class="footer-left">
            
				<div class="footer-logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo3.png" alt="Futurico Beautiful design portfolio" />
                    <div class="description"><?php bloginfo('description'); ?></div>
                </div><!--end footer-logo-->
                
				<div class="latest-works">
					<h1><span></span> &nbsp;latest works&nbsp; <span></span></h1>
					
                    <?php $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 4 ) ); ?>
                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

						  <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
                                if (has_post_thumbnail()) {
                                echo '<a href="'.$thumbnail[0].'" title="'.get_the_title().'" class="lightbox" rel="portfolio"><span class="overlay"></span>
                                        <img src="'.get_bloginfo('template_url').'/includes/thumb.php?src='.$thumbnail[0].'&amp;w=36&amp;h=36&amp;zc=1&amp;q=95" alt="popup" />
                                        </a>'; 
                          } ?>
                    
                    <?php endwhile; wp_reset_query(); ?>
				</div><!--end latest-works-->
			</div><!--end footer left-->
            
            
			<!--footer-center-->
			<div class="footer-center">
				<h1>from blog</h1>
                <ul class="footer-popular">
                <?php $popular = new WP_Query('orderby=comment_count&posts_per_page=2'); while ($popular->have_posts()) : $popular->the_post(); ?>
                      <li>
                          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                          <span><?php the_time('F jS, Y') ?> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pix_gray.png" alt="" /> <?php comments_popup_link( 'nocomments', 'onecomment', '% comments'); ?></span>
                          <hr />
                      </li>
                <?php endwhile; ?>
                </ul><!--end footer-popular-->
                
				<div class="footer-icons">
					<a href="https://twitter.com/#!/RockableThemes" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_twitter.png" alt="" /></a>
					<a href="https://www.facebook.com/rockablethemes" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_facebook.png" alt="" /></a>
					<a href="http://feeds.feedburner.com/rockablethemes" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_rss.png" alt="" /></a>
				</div><!--end footer-icons-->
			</div><!--end footer-center-->
            
            
            
			<!--footer-right-->
			<div class="footer-right">
				<h1>from twitter</h1>
					 <?php
                      $username = "rockablethemes"; // Your twitter username.
                      $limit = "2"; // Number of tweets to pull in.
                      
                      /* These prefixes and suffixes will display before and after the entire block of tweets. */
                      $prefix = "<div class='twitter-feed'>"; // Prefix - some text you want displayed before all your tweets.
                      $suffix = "</div>"; // Suffix - some text you want displayed after all your tweets.
                      $tweetprefix = "<p>"; // Tweet Prefix - some text you want displayed before each tweet.
                      $tweetsuffix = "</p><hr />"; // Tweet Suffix - some text you want displayed after each tweet.
                      
                      $feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=" . $limit;
                      
                      function parse_feed($feed, $prefix, $tweetprefix, $tweetsuffix, $suffix) {
                      
                      $feed = str_replace("&lt;", "<", $feed);
                      $feed = str_replace("&gt;", ">", $feed);
                      $clean = explode("<content type=\"html\">", $feed);
                      
                      $amount = count($clean) - 1;
                      
                      echo $prefix;
                      
                      for ($i = 1; $i <= $amount; $i++) {
                      $cleaner = explode("</content>", $clean[$i]);
                      echo $tweetprefix;
                      echo $cleaner[0];
                      echo $tweetsuffix;
                      }
                      
                      echo $suffix;
                      }
                      
                      $twitterFeed = file_get_contents($feed);
                      parse_feed($twitterFeed, $prefix, $tweetprefix, $tweetsuffix, $suffix);
                      ?>
			</div><!--end footer-right-->
		
        <div class="copyright">Copyright &#169; 2012 Briefcase, Free Premium Theme. All Rights Reserved <a href="http://rockablethemes.com" target="_blank" >Rockable Themes</a> &amp; <a href="http://designmodo.com" target="_blank" >DesignModo</a> </div>
        
        </div>
	</div>
	<!--end footer-->
</div>
<!--end root -->
	
</body>
</html>