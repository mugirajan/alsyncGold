<?php 

include 'shared/header.php';
include 'shared/php/connect.php';

?>
	
	<div id="overlay">
		<div class="header-image">
			<div class="banner1   d-lg-block d-none">
				<video autoplay loop muted plays-inline class="background-video">
					<source src="assets/images/home/alsync.mp4" type="video/mp4" />
				</video>
			</div>
			<div class="banner2 d-lg-none d-xl-none">
				<img class="background-video" src="assets/images/home/home-banner.jpg">
				</img>
			</div>
			<section class="herocontent">
				<h1>Welcome To <br>Alsync Global Solutions</h1>
				<a href="./Services" class="button lighthead"></a>
			</section>

		</div>
	 </div>


	<!-- Main Slider Three -->

	<!-- End Main Slider Three -->

	<!-- Main Slider -->

	<!-- End Main Slider -->

	<!-- Service One -->
	<section class="service-one" style="background-color: rgb(222, 223, 223);">
		<div class="auto-container">
			<div class="row clearfix">

				<?php

					$connect = createConn();
					$valid = array('success' => false, 'message' => "");
					$sql = "SELECT serv_nm, sDscrptn FROM serv_mstr WHERE is_ft_serv = true and is_deleted = false";
					$result = $connect->query($sql);
					
					while($row = $result->fetch_assoc()) 
        			{
						echo '
							<!-- Service Block One -->
							<div class="service-block_one col-lg-3 col-md-6 col-sm-12">
								<div class="service-block_one-inner">
									<div class="service-block_one-icon"><img src="assets/images/icons/service-1.png" alt="" /></div>
									<h5 class="service-block_one-title">
										<a href="./Services?service='. $row['serv_nm'] .'">
											'.$row['serv_nm'].'
										</a>
									</h5>
									<div class="service-block_one-text">
										'. $row['sDscrptn'] .'
									</div>
									<a class="theme-btn service-block_one-link" href="./Services?service='. $row['serv_nm'] .'">Read More</a>
									<div class="service-block_one-overlay" style="background-image:url(assets/images/Service-1.jpg)">
										<div class="service-block_one-text-two">
											'. $row['sDscrptn'] .'
										</div>
										<a class="theme-btn service-block_one-link two" href="./Services?service='. $row['serv_nm'] .'">Read More</a>
									</div>
								</div>
							</div>
						';
					}
			
				?>


			</div>
		</div>
	</section>
	<!-- End Service One -->

	<!-- About One -->
	<section class="about-one" style="background-color: white;">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-one_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-inner">
						<div class="sec-title">
							<div class="sec-title_title">About us</div>
							<h2 class="sec-title_heading">Choose <span>The Best</span> IT <br> Service Company</h2>
							<div class="sec-title_text">We are an engineering firm that focuses on leveraging
								cutting-edge technology and outstanding engineering
								solutions to create an environment that accelerates...</div>
						</div>

						<!-- About Info Tabs -->
						<div class="about-info-tabs">
							<!-- About Tabs -->
							<div class="about-tabs tabs-box">

								<!-- Tab Btns -->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-mission" class="tab-btn active-btn">Our Mission</li>
									<li data-tab="#prod-vision" class="tab-btn">Our Vision</li>
									<li data-tab="#prod-value" class="tab-btn">Our Value</li>
								</ul>

								<!-- Tabs Container -->
								<div class="tabs-content">

									<!-- Tab / Active Tab -->
									<div class="tab active-tab" id="prod-mission">
										<div class="content">
											<div class="text">
												We provide cutting-edge digital engineering solutions through top IT experts, optimizing projects for enhanced performance and cost efficiency. As a trusted technology partner, we prioritize ethical practices
 												and environmental responsibility, while exceeding client expectations.
											</div>
										</div>
									</div>

									<!-- Tab -->
									<div class="tab" id="prod-vision">
										<div class="content">
											<div class="text">
												We envision ALSYNC as a technology services leader, driving business and community impact. Our innovative solutions ensure customer success, supported by exceptional service. Adapting to tech changes and upholding high standards keeps us ahead.
											 	Count on ALSYNC as your trusted, reliable partner.
											</div>
										</div>
									</div>

									<!-- Tab -->
									<div class="tab" id="prod-value">
										<div class="content">
											<div class="text">
											Our aim at ALSYNC is to exceed client expectations with high-quality services and cutting-edge technology. Our passionate team turns your ideas into innovative solutions, partnering with you to bring your vision to life. We proudly adhere to a Quality 
											Management System as an ISO 9001:2015 Certified Company.
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- About One Detail -->
						<a class="about-one_detail"  href="./About">
							Check details about our company
							<span class="play-icon"><span class="fas fa-plus"></span><i
									class="ripple"></i></span>
						</a>

					</div>
				</div>
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one-image-inner">
						<div class="about-one_color-layer"></div>
						<div class="about-cicle_layer">
							<img src="assets/images/icons/circle-layer.png" alt="" />
						</div>
						<div class="about-one_image">
							<img src="assets/images/home-about/home-about.png" alt="" />
						</div>
						<!-- <div class="about-one_bold-text">About us</div> -->
						<div class="about-one_image-text">We are a certified IT Service company.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About One -->

	<!-- Counter One -->
	<section class="counter-one" style="padding:40px 0px;">
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">About our</div>
				<h2 class="sec-title_heading">Passionate Team & <br> <span class="theme_color">Versatile</span>
					Achievements</h2>
			</div>
			<div class="counter-one_inner-container" style="background-image:url(assets/images/home/homestats.jpg)">
				<div class="row clearfix">

					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fas fa-user-plus "></span>
							<div class="counter-one_counter"><span class="odometer" data-count="1999"></span>+</div>
							<div class="counter-one_text">Positive Reviews</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fas fa-award "></span>
							<div class="counter-one_counter"><span class="odometer" data-count="520"></span>+</div>
							<div class="counter-one_text">Achievements</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon far fa-file"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="650"></span>+</div>
							<div class="counter-one_text">Project completed</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fas fa-user-tie"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="100"></span>+</div>
							<div class="counter-one_text">Clients</div>
						</div>
					</div>

					<!-- Counter Column -->
					<!-- <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-user-tie fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="3"></span></div>
							<div class="counter-one_text">Ware House</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
	</section>
	<!-- End Counter One -->

	<!-- Service Two -->

	<!-- End Service Two -->

	<!-- Fluid Section One -->
	<section class="fluid-one">
		<div class="outer-container d-flex">

			<!-- Carousel Column -->
			<div class="fluid-one_carousel-column">
				<div class="fluid-one_carousel-inner">
					<div class="single-item-carousel owl-carousel owl-theme">
						<!-- Slide -->
						<div class="slide">
							<figure class="fluid-one_image"><img src="assets/images/web-app.jpg" alt=""></figure>
							<div class="fluid-one_content">
								<!-- Sec Title -->
								<div class="sec-title light">
									<div class="sec-title_title">We Expertized in</div>
									<h2 class="sec-title_heading">Web And Mobile App Development </h2>
									<div class="sec-title_text">We deliver best-in-class web and mobile solutions
										that will retain the attention of the target audience.</div>
								</div>
								<a class="project_one-pluss fa-solid fa-arrow-right  theme-btn" href="#"></a>
							</div>
						</div>
						<!-- Slide -->
						<div class="slide">
							<figure class="fluid-one_image"><img src="assets/images/it-infrastructure.jpg" alt=""></figure>
							<div class="fluid-one_content">
								<!-- Sec Title -->
								<div class="sec-title light">
									<div class="sec-title_title">We Expertized in</div>
									<h2 class="sec-title_heading"> Infrastructure Technology</h2>
									<div class="sec-title_text">We deliver best-in-class web and mobile solutions
										that will retain the attention of the target audience.</div>
								</div>
								<a class="project_one-pluss fa-solid fa-arrow-right  theme-btn" href="#"></a>
							</div>
						</div>
						<!-- Slide -->
						<div class="slide">
							<figure class="fluid-one_image"><img src="assets/images/warranty-manage.jpg" alt=""></figure>
							<div class="fluid-one_content">
								<!-- Sec Title -->
								<div class="sec-title light">
									<div class="sec-title_title">We Expertized in</div>
									<h2 class="sec-title_heading"> Warranty Management IT</h2>
									<div class="sec-title_text">We deliver best-in-class web and mobile solutions
										that will retain the attention of the target audience.</div>
								</div>
								<a class="project_one-pluss fa-solid fa-arrow-right  theme-btn" href="#"></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Content Column -->
			<div class="fluid-one_content-column">
				<div class="fluid-one_column-inner">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="sec-title_title">Who We Are?</div>
					
						<h2 class="sec-title_heading">High-quality - <span class="theme_color">Reliable Service</span> to All <br>
							</h2>
						<div class="sec-title_text">Our aim is to help our clients reach their fullest potential by
							providing them with high-quality and reliable services that exceed their expectations.
							We strive to stay up-todate with the latest technology and trends in order to provide
							our clients with the best options available.</div>
					</div>
					<div class="row clearfix">

						<!-- Fluid Block One -->
						<div class="fluid-block_one col-lg-6 col-md-6 col-sm-12">
							<div class="fluid-block_icon">
								<img src="assets/images/icons/fluid-1.png" alt="" />
							</div>
							<h5 class="fluid-block_title"> <span class="theme_color"> 17500 </span> <br>Active partners
							</h5>
							<!-- <div class="fluid-block_text">Our customers get solutions and business opportunities instead of just projects. Our mission is to accelerate.</div> -->
						</div>

						<!-- Fluid Block One -->
						<div class="fluid-block_one col-lg-6 col-md-6 col-sm-12">
							<div class="fluid-block_icon">
								<img src="assets/images/icons/fluid-2.png" alt="" />
							</div>
							<h5 class="fluid-block_title"><span class="theme_color"> 2980 </span><br> Daily Enquiries
							</h5>
							<!-- <div class="fluid-block_text">Our customers get solutions and business opportunities instead of just projects. Our mission is to accelerate.</div> -->
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End Fluid Section One -->

	<!-- Team One -->
	<section class="team-one">
		<!-- <span class="team-color-box"></span> -->
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Team Member</div>
				<h2 class="sec-title_heading"> Admiring Personalities<br> <span class="theme_color"> Amazing</span>
					Brains</h2>
			</div>
			<div class="row clearfix">

				<!-- Team One -->
				<div class="team_one col-lg-3 col-md-6 col-sm-12">
					<div class="team_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="team_one-image">
							<img src="assets/images/team/avatar1.jpg" alt="" />
							<div class="team_one-content">
								<h5 class="team-one_title"><a href="#">Ashish Sudra</a></h5>
								<div class="team-one_designation">Founder & CEO</div>
							</div>

							<div class="team_one-overlay">
								<div class="team-one_overlay-content">
									<div class="team_one-text">Our goal is to propel your to business forward u
										world-class IT cybersecurity and technology We provide the expert solutions.
									</div>
									<a class="team_one-more" href="#">Read more</a>
								</div>
							</div>

						</div>
						<!-- Social Box -->
						<ul class="team-one_social">
							<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://dribbble.com/" class="fa-brands fa fa-dribbble fa-fw"></a></li>
						</ul>
					</div>
				</div>

				<!-- Team One -->
				<div class="team_one col-lg-3 col-md-6 col-sm-12">
					<div class="team_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="team_one-image">
							<img src="assets/images/team/avatar2.png" alt="" />
							<div class="team_one-content">
								<h5 class="team-one_title"><a href="#">Rachna Sheth</a></h5>
								<div class="team-one_designation">International Business Head</div>
							</div>

							<div class="team_one-overlay">
								<div class="team-one_overlay-content">
									<div class="team_one-text">Our goal is to propel your to business forward u
										world-class IT cybersecurity and technology We provide the expert solutions.
									</div>
									<a class="team_one-more" href="#">Read more</a>
								</div>
							</div>

						</div>
						<!-- Social Box -->
						<ul class="team-one_social">
							<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://dribbble.com/" class="fa-brands fa fa-dribbble fa-fw"></a></li>
						</ul>
					</div>
				</div>

				<!-- Team One -->
				<div class="team_one col-lg-3 col-md-6 col-sm-12">
					<div class="team_one-inner wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="team_one-image">
							<img src="assets/images/team/avatar3.png" alt="" />
							<div class="team_one-content">
								<h5 class="team-one_title"><a href="#">Tapak Meni</a></h5>
								<div class="team-one_designation">Founder & CEO</div>
							</div>

							<div class="team_one-overlay">
								<div class="team-one_overlay-content">
									<div class="team_one-text">Our goal is to propel your to business forward u
										world-class IT cybersecurity and technology We provide the expert solutions.
									</div>
									<a class="team_one-more" href="#">Read more</a>
								</div>
							</div>

						</div>
						<!-- Social Box -->
						<ul class="team-one_social">
							<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://dribbble.com/" class="fa-brands fa fa-dribbble fa-fw"></a></li>
						</ul>
					</div>
				</div>

				<!-- Team One -->
				<div class="team_one col-lg-3 col-md-6 col-sm-12">
					<div class="team_one-inner wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="team_one-image">
							<img src="assets/images/team/avatar4.png" alt="" />
							<div class="team_one-content">
								<h5 class="team-one_title"><a href="#">Ergi Laura</a></h5>
								<div class="team-one_designation">Founder & CEO</div>
							</div>

							<div class="team_one-overlay">
								<div class="team-one_overlay-content">
									<div class="team_one-text">Our goal is to propel your to business forward u
										world-class IT cybersecurity and technology We provide the expert solutions.
									</div>
									<a class="team_one-more" href="#">Read more</a>
								</div>
							</div>

						</div>
						<!-- Social Box -->
						<ul class="team-one_social">
							<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://dribbble.com/" class="fa-brands fa fa-dribbble fa-fw"></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Team One -->

	<!-- Awards One -->
	<section class="clients-three" style="background-color:#0f0f35; padding: 70px 0px;z-index: 9;">
		<div class="container-fluid">
			<div class="sec-title light centered">
				<div class="sec-title_title">Our <span class="theme_color"> Presitigious </span> Clients</div>
				<h2 class="sec-title_heading">We are very proud of our <br> Best <span class="theme_color">
						Clients</span></h2>
			</div>
			<div class="clients-three_inner-container">
				<!-- Sponsors Carousel -->
				<ul class="sponsors-carousel-two owl-carousel owl-theme">
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client1whiteredo.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client2white.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client3white.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client4white.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client5whiteredo.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client6whiteredo.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="assets/images/clients/client7whiteredo.png" alt=""></a></figure></li>
					<!-- <li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/client1.png" alt=""></a></figure></li> -->
				</ul>
			</div>
		</div>
	</section><br>
	<!-- End Awards One -->

	<!-- Testimonial One -->
	<section class="testimonial-one">
		<div class="auto-container">
			<div class="awards-one_pattern-1" style="background-image:url(assets/images/background/pattern-7.png)"></div>
			<div class="awards-one_pattern-2" style="background-image:url(assets/images/background/pattern-8.png)"></div>
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="sec-title_title">Our Client’s Testimonials</div>
			</div>
			<div class="single-item-carousel owl-carousel owl-theme">

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-quote fas fa-quote-left"></div>
						<div class="testimonial-block_one-text">Ordered my first mobile app development to iCoderz
							Solutions. I was inexperienced contractor but they carefully listened to my request and
							try to deliver the best quality of service.</div>
						<h5 class="testimonial-block_one-author">Sachin Diwar</h5>
						<div class="testimonial-block_one-designation">(Sr IT Director at Instrek & ID Design Ltd)
						</div>
					</div>
				</div>

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-quote fas fa-quote-left "></div>
						<div class="testimonial-block_one-text">Ordered my first mobile app development to iCoderz
							Solutions. I was inexperienced contractor but they carefully listened to my request and
							try to deliver the best quality of service.</div>
						<h5 class="testimonial-block_one-author">Sachin Diwar</h5>
						<div class="testimonial-block_one-designation">(Sr IT Director at Instrek & ID Design Ltd)
						</div>
					</div>
				</div>

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-quote fas fa-quote-left"></div>
						<div class="testimonial-block_one-text">Ordered my first mobile app development to iCoderz
							Solutions. I was inexperienced contractor but they carefully listened to my request and
							try to deliver the best quality of service.</div>
						<h5 class="testimonial-block_one-author">Sachin Diwar</h5>
						<div class="testimonial-block_one-designation">(Sr IT Director at Instrek & ID Design Ltd)
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Testimonial One -->

	<!-- Projects One -->
	<section class="projects-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Work Index!</div>
						<h2 class="sec-title_heading">Few of Our Works Adored <br> by <span> millions of
								users!</span></h2>
					</div>
					<div class="right-box">
						<div class="sec-title_text">The perfect blend of mature processes, flexible delivery <br>
							models, effective project management.</div>
					</div>
				</div>
			</div>
			<!-- MixitUp Galery -->
			<div class="mixitup-gallery">

				<!-- Filter -->
				<div class="projects-one_filters">
					<ul class="filter-tabs">
						<li class="active filter" data-role="button" data-filter="all">All</li>
						<li class="filter" data-role="button" data-filter=".web">Web Technology</li>
						<li class="filter" data-role="button" data-filter=".cloud">Cloud Database</li>
						<li class="filter" data-role="button" data-filter=".design">UI/UX Design</li>
					</ul>
				</div>

				<div class="filter-list row clearfix">

					<!-- Project One -->
					<div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="assets/images/home/award.png" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="#">Award-Winning
											Photo</a></h5>
									<div class="project-one_designation">Photo Editing</div>
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers,
											designers and the strategists with a lot of thought and analysis come
											true!</div>
										<a class="project_one-plus fa-solid fa-plus "
											href="#"></a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Project One -->
					<div class="project_one mix all cloud col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="assets/images/home/editing.png" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="#">Property
											Simplified</a></h5>
									<div class="project-one_designation">Photo Editing</div>
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers,
											designers and the strategists with a lot of thought and analysis come
											true!</div>
										<a class="project_one-plus fa-solid fa-plus"
											href="#"></a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Project One -->
					<div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="assets/images/home/foodapp.png" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="#">Deliveries Made
											Easy</a></h5>
									<div class="project-one_designation">Food Delivery</div>
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers,
											designers and the strategists with a lot of thought and analysis come
											true!</div>
										<a class="project_one-plus fa-solid fa-plus "
											href="#"></a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Project One -->
					<div class="project_one mix all cloud web col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="assets/images/home/collection.png" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="#">Collection
											Management</a></h5>
									<div class="project-one_designation">Web Application</div>
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers,
											designers and the strategists with a lot of thought and analysis come
											true!</div>
										<a class="project_one-plus fa-solid fa-plus"
											href="#"></a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Project One -->
					<!-- <div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
							<div class="project_one-inner">
								<div class="project_one-image">
									<img src="images/gallery/project-5.jpg" alt="" />
									<div class="project_one-content">
										<h5 class="project-one_title"><a href="project-detail.html">Improvement
												Company</a></h5>
										<div class="project-one_designation">Web Application</div>
									</div>

									<div class="project_one-overlay">
										<div class="project-one_overlay-content">
											<div class="project_one-text">lead the team of passionate developers,
												designers and the strategists with a lot of thought and analysis come
												true!</div>
											<a class="project_one-plus fa-solid fa-plus fa-fw"
												href="project-detail.html"></a>
										</div>
									</div>

								</div>
							</div>
						</div> -->

					<!-- Project One -->
					<div class="project_one mix all cloud web col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="assets/images/home/ios.png" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="#">iOS Application</a>
									</h5>
									<div class="project-one_designation">Admin Dashboard</div>
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers,
											designers and the strategists with a lot of thought and analysis come
											true!</div>
										<a class="project_one-plus fa-solid fa-plus"
											href="#"></a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Project One -->
					<div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="assets/images/home/handyman.png" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="#">HandyMan app</a>
									</h5>
									<div class="project-one_designation">Web App</div>
								</div>

								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers,
											designers and the strategists with a lot of thought and analysis come
											true!</div>
										<a class="project_one-plus fa-solid fa-plus"
											href="#"></a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Project One -->
					<!-- <div class="project_one mix all cloud web col-lg-3 col-md-6 col-sm-12">
							<div class="project_one-inner">
								<div class="project_one-image">
									<img src="images/gallery/project-8.jpg" alt="" />
									<div class="project_one-content">
										<h5 class="project-one_title"><a href="project-detail.html">Property
												Simplified</a></h5>
										<div class="project-one_designation">Photo Editing</div>
									</div>

									<div class="project_one-overlay">
										<div class="project-one_overlay-content">
											<div class="project_one-text">lead the team of passionate developers,
												designers and the strategists with a lot of thought and analysis come
												true!</div>
											<a class="project_one-plus fa-solid fa-plus fa-fw"
												href="project-detail.html"></a>
										</div>
									</div>

								</div>
							</div>
						</div> -->

				</div>

				<!-- Button Box -->
				<!-- <div class="projects-one_button-box text-center">
					<a class="btn-style-one theme-btn btn-item" href="#">
						<div class="btn-wrap">
							<span class="text-one">Load more</span>
							<span class="text-two">Load more</span>
						</div>
					</a>
				</div> -->

			</div>
		</div>
	</section>
	<!-- End Projects One -->

	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
					<div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="./Contact">contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

	<script src="./style/js/indxHelper.js"></script>

<?php include 'shared/footer.php' ?>
	