<?php
/**
 * The template for displaying The About page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>



<section class="page-about">
	<div class="main-content">
		 <h2 class="entry-title"><?php the_title(); ?></h2> 
			 <p>Hi! My name is Alejandra Valdivia, but you can also call me "Alex". 😀
              I'm a <em><strong><a href="https://www.alexvcodes.com/" target="_blank">
              Web Developer</a></strong></em> in Vancouver, Canada.
              I use the languages of HTML, CSS, and JavaScript, with tools like Photoshop
              and WordPress, to build modern, responsive, mobile-first websites.
              I'm bilingual! I speak English and
              <a href="https://www.alexvcodes.com/espanol/index.html" target="_blank">Spanish</a>! Hola!
            <p> I’m a very detail-oriented person, enjoy analyzing information and have
              always enjoyed working with colors and designs.</p>
            <p>Since my childhood, I have been interested in learning how things work,
              in how they were made, in science, and technology.</p>
            <p>Having all these interests, I naturally gravitated towards studying Web
              Development as it encompasses all these interests. I absolutely love
              being a Web Developer!</p>
            <p>Thanks to my business background, I have been able to develop creative,
              problem-solving techniques, an eye for design, a passion for building engaging
              and delightful user experiences, and client managing skills to come up with the 
              perfect site for my customers' needs. When I start working with code, the
              colors, the images, the branding, etc.,
              it feels as if I’m creating a digital painting, another work of art.</p>
							<p>Let's create <strong>your</strong> project!</p>
              <p>Get in touch with me at <a href="mailto:alexxandra_valdivia@hotmail.com" target="_blank">
                alexxandra_valdivia@hotmail.com</a></p>
	

  <!-- Replace with bonus challenge below -->
  <?php if ( has_post_thumbnail() ) : ?>
    <figure><?php the_post_thumbnail('full'); ?></figure>
  <?php endif; ?>
	
  
</div>


	<?php get_sidebar(); ?>
  
</section>  


<?php get_footer(); ?>
