<?php
/**
 * Template Name: Portfolio Innner
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<SCRIPT TYPE="text/javascript">
	$(document).ready(function(){
		
	});
</SCRIPT>
	<div class="containerBox">
    	<div class="containerBoxInner">
        		<h2>Work portfolio</h2>
        	<div class="aboutInner">
        		<!-- <div class="bxslider"> -->
        			<?php
        				$catid = get_field('choose_category');
						$args = array(
										'posts_per_page'   => -1,
										'category'         => $catid,
										'orderby'          => 'post_date',
										'order'            => 'DESC',
										'post_type'        => 'post',
										'post_mime_type'   => '',
										'post_status'      => 'publish',
									);

						$myposts = get_posts( $args );
						$total_post_count = count($myposts);

						$i=0;
						echo '<div class="slider"> <ul> ';
						foreach ( $myposts as $post ) : setup_postdata( $post );
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							// echo '<li class="activeslide sldimg" data-title="'.get_the_title().'"><a class="fancybox" href="'.$url.'" data-fancybox-group="gallery" title="'.get_the_title().'"><img src="'.$url.'" class="reflect"></a></li>';
							echo '<li class="activeslide sldimg" data-title="'.get_the_title().'"><img src="'.$url.'" class="reflect"></li>';
						endforeach;
						echo '</ul></div>';
						wp_reset_postdata();
					?>
                <!-- </div> -->
            </div>
            
            
        </div>
    </div>
<?php
get_footer();
