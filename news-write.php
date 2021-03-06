<?php
	include "header.php";
?>
		<!-- End Header -->

		<!-- content
				================================================== -->
		<div id="content">

			<!-- page-banner-section 
				================================================== -->
			<section class="page-banner-section blog-banner">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2><span>Media</span> News</h2>
						</div>
						<div class="col-md-6">
							<ul class="page-pagin">
								<li><a href="/">Home</a></li>
								<li><a href="news.php">News</a></li>
								<li><a href="news.php">Media</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- End page-banner section -->

			<!-- blog-section 
				================================================== -->
			<section class="blog-section standard">
				<div class="container">
					<div class="row">
						<div class="col-md-9" style="background:#ffffff;padding:40px 20px 40px 20px;">
							<section class="blog-section single2">
								<div class="blog-post single-post">
									<form id="contact-form">
										<div class="row">
											<div class="col-md-4">
												<input name="name" id="name" type="text" placeholder="Admin">
											</div>
											<div class="col-md-4">
												<input name="subject" id="subject" type="text" placeholder="Subject">
											</div>
											<div class="col-md-4">
												<input name="date" id="date" type="text" placeholder="12/09/2015">
											</div>
										</div>
										<textarea name="comment" id="comment" placeholder="Your News"></textarea>
										<p style="float:left;width:80px;">Image File</p>
										<p style="float:left;width:90%;"><input type="file" name="file1" class="bd" style="width:500px;cursor:pointer;"></p>
										<div class="submit-area">
											<input type="submit" id="submit_contact" value="Submit">
											<div id="msg" class="message"></div>								
										</div>
									</form>	
								</div>
							</section>
						</div>
						<div class="col-md-3">
							<div class="sidebar">
								<div class="category-widget widget">
									<h2>News</h2>
									<ul class="category-list">
										<li><a href="news.php">Media</a></li>
										<li><a href="newsletter.php">Newsletter</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- End blog section -->
			
		</div>
		<!-- End content -->

		<!-- footer 
			================================================== -->
		<?php
	include "footer.php";
?>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>