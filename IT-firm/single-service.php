<?php 

include 'shared/header.php';
include 'shared/php/connect.php';

$pageFor = $_GET['service'];

?>
	
	<!-- Page Title -->
	<section class="page-title" style="background-image:url(./assets/images/service/innerbanner.png); background-size: cover; background-overlay: #000">
        <div class="auto-container">
			<h2> <?php echo $pageFor ?> </h2>
			<ul class="bread-crumb clearfix">
				<li><a href="./Home">Home</a></li>
				<li> <?php echo $pageFor ?> </li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="single-service sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						<!-- Sidebar Widget -->
						<div class="sidebar-widget category-widget">
							<ul class="cat-list">

							<?php

								$connect = createConn();
								$valid = array('success' => false, 'message' => "");
								$sql = "SELECT serv_nm, sDscrptn FROM serv_mstr WHERE active_status = true and is_deleted = false";
								$result = $connect->query($sql);

								while($row = $result->fetch_assoc()) 
								{
									echo '
										<li>
											<a href="./Detailed-Service?service='. $row['serv_nm'] .'"> '. $row['serv_nm'] .' </a>
										</li>
									';
								}

								?>
							</ul>
						</div>
						
						<!-- Contact Widget -->
						<div class="sidebar-widget contact-widget">
							<div class="widget-content" style="background-image:url(assets/images/service/3d-render-concept-phone-receiver-3d-art-design-illustration.jpg)">
								<div class="title">Contact us now</div>
								<div class="help">If need help!</div>
								<a class="phone" href="tel:+04447730641"> 044 4773 0641 </a>
								<div class="form">or go to <a href="./Contact"> <strong> CONTACT </strong> </a></div>
							</div>
						</div>
						
					</aside>
				</div>

				<?php

					$connect = createConn();
					$valid = array('success' => false, 'message' => "");
					$sql = "SELECT sDscrptn, dscrptn, ft_img FROM serv_mstr WHERE serv_nm = '". $pageFor ."' and is_deleted = false";
					$result = $connect->query($sql);
					$row = $result->fetch_assoc();

				?>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
					<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="<?php echo '../../alsync-admin/'.$row['ft_img'] ?>" alt="" />
							</div>
							<h3> <?php echo $pageFor ?> </h3>
							
							<?php

								echo '
									<p>
										'. $row['sDscrptn'] .'
									</p>
									
									<br/>
									<br/>

									<p>
										'. $row['dscrptn'] .'
									</p>
								';

							
							?>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->
	
	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
					<div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.html">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

<?php include 'shared/footer.php' ?>
	