<?php get_header(); ?>

<!-- Header area -->
<div id="header-wrapper" class="header-slider" style="background-image:  url(<?php echo $theme_opt['theme_slider_background']['url']; ?>);">
    
	<header class="clearfix">
	<div class="logo">
		<img src="<?php echo $theme_opt['theme_logo']['url']; ?>" alt="" />
	</div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="main-flexslider" class="flexslider">
					<ul class="slides">
					<?php 
                        $maxim_post_query= null;
                        $maxim_post_query = new WP_Query(array(
                          'post_type' => 'slider',
                          
                        ));  ?>
        <?php $pre= '_maxim_'; if($maxim_post_query->have_posts()){$maxim_post_query->the_post() ?>
<?php $slider_cmb2_post = get_post_meta(get_the_ID(), $pre.'maxim_slider_field', true); ?>

                    <?php foreach($slider_cmb2_post as $single_slider){ ?>
						<li>
						<p class="home-slide-content">
<strong><?php echo $single_slider[$pre.'maxim_slider_strong'] ?></strong><?php echo $single_slider[$pre.'maxim_slider_normal'] ?>
						</p>
						</li>
						<?php } } ?>
				    </ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
	</header>
</div>

<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span6 alignright flyLeft">
			<blockquote class="large">
				<?php echo $theme_opt['theme_blockquote_field']; ?>
				
				 <cite><?php echo $theme_opt['theme_blockquote_name']; ?></cite>
			</blockquote>
		</div>
		<div class="span6 aligncenter flyRight">
			<i class="<?php echo $theme_opt['theme_blockquote_icon']; ?>"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
<div class="container">
	 <?php 
                        $maxim_post_query= null;
                        $maxim_post_query = new WP_Query(array(
                          'post_type' => 'about',
                          
                        ));  ?>
     <?php if($maxim_post_query->have_posts()){ $maxim_post_query->the_post(); 
    
      $about_cmb2_con_title = get_post_meta(get_the_ID(), $pre.'maxim_about_con_title', true);
      $about_cmb2_con = get_post_meta(get_the_ID(), $pre.'maxim_about_con', true);
                                           
    ?>                  
	<h4><?php the_title(); ?></h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2><strong><?php echo $about_cmb2_con_title; ?></strong></h2>
				<p>
					<?php echo $about_cmb2_con; ?>
				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	</div>
	<div class="row">
	
	
	<?php $about_cmb2_team = get_post_meta(get_the_ID(), $pre.'maxim_about_team_id', true); ?>
	     
	     <?php  foreach($about_cmb2_team as $single_team ){ ?>
		<div class="span2 offset1 flyIn">
			<div class="people">
<img class="team-thumb img-circle" src="<?php echo $single_team[ $pre.'maxim_about_team_img']; ?>" alt="" />
				<h3><?php echo $single_team[ $pre.'maxim_about__team_name']; ?></h3>
				<p>
					<?php echo $single_team[ $pre.'maxim_about__team_desg']; ?>
				</p>
			</div>
		</div>
		<?php }  ?>		
	</div>
	<?php } ?>
</div>
<!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange">
<div class="container">

	 <?php 
                        $maxim_post_query= null;
                        $maxim_post_query = new WP_Query(array(
                          'post_type' => 'service',
                          
                        ));  ?>
     <?php if($maxim_post_query->have_posts()){ $maxim_post_query->the_post(); 
    
$about_cmb2_con_title = get_post_meta(get_the_ID(), $pre.'maxim_service_con_title', true);
      
    ?> 

	<h4><?php the_title(); ?></h4>
	<!-- Four columns -->
	<div class="row">
	<?php $service_cmb2_team = get_post_meta(get_the_ID(), $pre.'maxim_service_id', true); ?>
	
	<?php  foreach($servics_cmb2_team as $single_service ){ ?>
	
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="<?php echo $single_service[ $pre.'maxim_service_img']; ?>" alt="" />
				<h2><?php echo $single_service[ $pre.'maxim_service_name']; ?></h2>
				<p>
					<?php echo $single_service[ $pre.'maxim_service_description']; ?>
				</p>
			</div>
		</div>
	
		<?php } ?>
		
	</div>
	<?php } ?>
</div>
</section>
<!-- end section: services -->
<!-- section: works -->
<section id="works" class="section">
<div class="container clearfix">
	<h4>Our Works</h4>
	<!-- portfolio filter -->
	<div class="row">
		<div id="filters" class="span12">
			<ul class="clearfix">
				<li><a href="#" data-filter="*" class="active">
				<h5>All</h5>
				</a></li>
				<li><a href="#" data-filter=".web">
				<h5>Web</h5>
				</a></li>
				<li><a href="#" data-filter=".print">
				<h5>Print</h5>
				</a></li>
				<li><a href="#" data-filter=".design">
				<h5>Design</h5>
				</a></li>
				<li><a href="#" data-filter=".photography">
				<h5>Photography</h5>
				</a></li>
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>
	<div class="row">
		<div class="span12">
			<div id="portfolio-wrap">
				<!-- portfolio item -->
				<div class="portfolio-item grid print photography">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/1.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid print design web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/2.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid print design">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/3.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/4.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/5.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/6.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/7.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/8.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid photography web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/9.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- portfolio item -->
				<div class="portfolio-item grid design web">
					<div class="portfolio">
						<a href="<?php echo get_template_directory_uri(); ?>/img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/works/10.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
		</div>
	</div>
</div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
			<blockquote class="large">
				 We are an established and trusted web agency with a reputation for commitment and high integrity
			</blockquote>
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="icon-rocket icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
<div class="container">
	<h4>Our Blog</h4>
	<!-- Three columns -->
	<div class="row">
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="<?php echo get_template_directory_uri(); ?>/img/blog/img1.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">June 19, 2013</span>
					<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">New design trends</a></strong></h5>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
					</p>
					<a href="#" class="more">Read more</a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="<?php echo get_template_directory_uri(); ?>/img/blog/img2.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">June 19, 2013</span>
					<span class="tags"><a href="#">Design</a>, <a href="#">News</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">Retro is great</a></strong></h5>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
					</p>
					<a href="#" class="more">Read more</a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="<?php echo get_template_directory_uri(); ?>/img/blog/img3.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">June 22, 2013</span>
					<span class="tags"><a href="#">Design</a>, <a href="#">Tips</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">Isometric mockup</a></strong></h5>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
					</p>
					<a href="#" class="more">Read more</a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="<?php echo get_template_directory_uri(); ?>/img/blog/img4.jpg" alt="" />
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date">June 27, 2013</span>
					<span class="tags"><a href="#">News</a>, <a href="#">Tutorial</a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#">Free icon set</a></strong></h5>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
					</p>
					<a href="#" class="more">Read more</a>
				</div>
			</div>
		</div>
	</div>
	<div class="blankdivider30"></div>
	<div class="aligncenter">
		<a href="#" class="btn btn-large btn-theme">More blog post</a>
	</div>
</div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>Get in Touch</h4>
	<p>
		 Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
	</p>
	<div class="blankdivider30">
	</div>
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				<div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
				<form action="" method="post" role="form" class="contactForm">
					<div class="row">
						<div class="span6">
							<div class="field your-name form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-email form-group">
								<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
							</div>
							<div class="field subject form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
							</div>
						</div>
						<div class="span6">
							<div class="field message form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
							</div>
							<input type="submit" value="Send message" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- ./span12 -->
	</div>
</div>
</section>


<?php get_footer(); ?>