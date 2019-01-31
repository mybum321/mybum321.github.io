<?php
	include "header.php";
?>
<script language="javascript">
function sendit()
{
	var f = document.colb;
	
	if(f.name.value=="")
	{
		alert("input name!");
		return false;
		
	}
	
	if(f.mail.value=="")
	{
		alert("input mail !");
		return false;
		
	}
	
	if(f.Telephone.value=="")
	{
		alert("input Telephone !");
		return false;
		
	}
}
</script>
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
							<h2><span>Order </span>Form</h2>
						</div>
						<div class="col-md-6">
							<ul class="page-pagin">
								<li><a href="/">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- End page-banner section -->

			<!-- contact-section 
				================================================== -->
			<section class="contact-section">
			<div class="contact-info">
				<div class="container">
									
						<div style="height:40px;"></div>
						<div class="contact-form" style="border-top:1px solid #dddddd;padding-top:20px;">
							<div class="container" style="width:100%">
								
								<form id="contact-form" name="colb" method="POST" onsubmit="return sendit()" action="send.php">  
								
									<h2 style="font-size:20px;">Order Form</h2>
									<div class="row">
										<div class="col-md-4">
											<input name="name" id="name" type="text" placeholder="Name(Required)">
										</div>
										<div class="col-md-4">
											<input name="mail" id="mail" type="text" placeholder="Email(Required)">
										</div>
										<div class="col-md-4">
											<input name="Telephone" id="Telephone" type="text" placeholder="Telephone(Required)">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<input name="address1" id="address1" type="text" placeholder="Address1">
										</div>
										<div class="col-md-6">
											<input name="address2" id="address2" type="text" placeholder="Address2">
										</div>
										
									</div>
								
									<div class="row">
										<div class="col-md-4">
											<input name="city" id="city" type="text" placeholder="city">
										</div>
										<div class="col-md-4">
											<input name="state" id="state" type="text" placeholder="state">
										</div>
										<div class="col-md-4">
											<input name="zipcd" id="zipcd" type="text" placeholder="zip code">
										</div>
										<div class="col-md-4">
											<input name="country" id="country" type="text" placeholder="Country">
										</div>
									</div>
									<h2 style="font-size:20px;">* check box for order.</h2>
									
										<div class="row">
										<div class="col-md-3">
											<input name="prd1" id="prd1" type="checkbox" value="Gel4Cell®">Gel4Cell®
											<input name="prd1_qty" id="prd1_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd2" id="prd2" type="checkbox" value="Gel4Cell®-BMP">Gel4Cell®-BMP
											<input name="prd2_qty" id="prd2_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd3" id="prd3" type="checkbox" value="Gel4Cell®-VEGF">Gel4Cell®-VEGF
										    <input name="prd3_qty" id="prd3_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd4" id="prd4" type="checkbox" value="Gel4Cell®-TGF">Gel4Cell®-TGF
										    <input name="prd4_qty" id="prd4_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd5" id="prd5" type="checkbox" value="Polyinks®-PCL">Polyinks®-PCL(filament)
										
										    <input name="prd5_qty" id="prd5_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd6" id="prd6" type="checkbox" value="Polyinks®-PLA">Polyinks®-PLA(filament)
										    <input name="prd6_qty" id="prd6_qty" type="text" placeholder="Quantity">
										</div>
										
										<div class="col-md-3">
											<input name="prd7" id="prd7" type="checkbox" value="Polyinks®-PLCL-W">Polyinks®-PLCL-W(powder)
											
										    <input name="prd7_qty" id="prd7_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd8" id="prd8" type="checkbox" value="Polyinks®-PLCL-M">Polyinks®-PLCL-M(powder)
										    <input name="prd8_qty" id="prd8_qty" type="text" placeholder="Quantity">
										</div>
										<div class="col-md-3">
											<input name="prd9" id="prd9" type="checkbox" value="Polyinks®-PLCL-Y">Polyinks®-PLCL-Y(powder)
										    <input name="prd9_qty" id="prd9_qty" type="text" placeholder="Quantity">
										</div>
										
										
									</div>
									<textarea name="comment" id="comment" placeholder="Your Message(Required)"></textarea>
									<div class="submit-area">
										<input type="submit" value="Order">
										<div id="msg" class="message"></div>								
									</div>
								</form>
							</div>
						</div>
						</div>
						
					</div>
				</div>
			</div>
			</section>
			<!-- End contact section -->
			
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