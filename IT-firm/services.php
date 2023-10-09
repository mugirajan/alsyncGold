<?php 

include 'shared/header.php';
include 'shared/php/connect.php';

?>
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/service/standard-quality-control-collage-concept.jpg)">
        <div class="auto-container">
			<h2>Our Services</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="./Home">Home</a></li>
				<li>Our Services</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Service Two -->
	<section class="service-two">
		<div class="auto-container-service">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Our Services</div>
				<h2 class="sec-title_heading">We provide the necessary <br> services to you</h2>
			</div>
			<div class="row clearfix">

				<?php

					$connect = createConn();
					$valid = array('success' => false, 'message' => "");
					$sql = "SELECT serv_nm, sDscrptn FROM serv_mstr WHERE is_deleted = false";
					$result = $connect->query($sql);
					
					while($row = $result->fetch_assoc()) 
        			{
						echo '
							<!-- Service Block Two -->
							<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
								<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="service-block_two-image">
										<img src="assets/images/service/6533310.jpg" alt="" />
										<div class="service-block_two-overlay">
											<div class="service-block_two-icon"><img src="assets/images/icons/service-4.png" alt="" /></div>
											<h5 class="service-block_two-title"> '. $row['serv_nm'] .' </h5>
										</div>
										<div class="service-block_two-overlay-two">
											<div class="service-two_overlay-content">
												<h5 class="service-block_two-title"><a href="./Service?service='. $row['serv_nm'] .'"> '. $row['serv_nm'] .' </a></h5>
												<div class="service-block_two-text">
												'. $row['sDscrptn'] .'
												</div>
												<a class="service-block_two-more" href="./Service?service='. $row['serv_nm'] .'">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						';
					}
			
				?>
				
			</div>
			
		</div>
	</section>
	<!-- End Service Two -->
	
	
	
	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
					<div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.php">contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

<?php include 'shared/footer.php' ?>
	