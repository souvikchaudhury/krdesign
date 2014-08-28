<?php
/**
 * Template Name: About Us
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div class="containerBox aboutbg">
		<div class="containerBoxInner">
	    		<h2>Who we are….?</h2>
	    	<div class="aboutInner">
	    		<p>At KRdesigns we offer flexible architectural design solutions, urban planning, full documentation and visualization.  We  offer services for a large range of  residential, commercial and industrial projects.  At KRdesigns we specialize in architectural 3Dimensional modelling, rendering and animations to create photorealistic visualisations.</p>
	            <p>We like working on those projects that bring specific challenges and require unpredicted innovation and highly imaginative solutions.</p>
	        <span><strong>At KRdesigns we aim:</strong></span>
	        <ul>
	            <li>- to listen, respond and exceed our client aspirations.</li>
	            <li>- to provide a variety of consulation,  architectural and visulaisation services.</li>
	            <li>- to provide the best possible architectural design solutions with inspired yet practical designs.</li>
	            <li>- to  provide Ecologically Sustainable Design strategies that are considered from the intial design proces</li>
	        </ul>
	        
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
