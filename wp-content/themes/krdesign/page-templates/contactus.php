<?php
/**
 * Template Name: Contact Us
 *
 *  @package WordPress
 *  @subpackage krdesign
 *  @since krdesign
 */

get_header(); ?>

<div class="containerBox">
        	<div class="containerBoxInner">
            	<h2>Contact Us</h2>
                <div class="formpart">
                	<form>
                    	<div class="formleft">
                        	<input type="text" value="" placeholder="Name" class="textbox"/>
                            <input type="text" value="" placeholder="Email" class="textbox"/>
                            <textarea class="textarea"></textarea>
                        </div>
                        <div class="formright">
                        	<input type="submit" value="Send" class="sendbtn" />
                        </div>
                    </form>
                </div>
            	<div class="addressPannel">
                	<div class="addressPannelLeft">
                    	<h2>Address</h2>
                        <p><?php echo get_field( "address" ); ?></p>
                        <ul>
                        	<li class="email">Email id: <a href="mailto:<?php echo get_field( "email_id" ); ?>" target="_blank"><?php echo get_field( "email_id" ); ?></a></li>
                            <li class="phone">Phone: <?php echo get_field( "phone_no" ); ?></li>
                        </ul>
                    	
                    </div>
                    <div class="addressPannelRight">
                    	<iframe src="<?php echo get_field( "google_map_iframe_code" ); ?>" width="100%" height="225" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
                <div class="containerBoxFooter">
                	<div class="containerBoxFooterbox">
                    	<?php wp_nav_menu( array( 'theme_location' => 'footer_section1', 'menu_class' => 'menuw' ) ); ?>
                    </div>
                    <div class="containerBoxFooterbox">
                    	<?php wp_nav_menu( array( 'theme_location' => 'footer_section2', 'menu_class' => 'menuw' ) ); ?>
                    </div>
                    <div class="containerBoxFooterbox">
                    	<?php wp_nav_menu( array( 'theme_location' => 'footer_section3', 'menu_class' => 'menuw' ) ); ?>
                    </div>
                </div>
            </div>
      	</div>

<?php
get_footer();
