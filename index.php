<?php
include_once("dbconfig.php");
function SQL_fInjection($get_Str) {
	return eregi_replace("( select| union| insert| update| delete| drop|\"|\'|#|\/\*|\*\/|\\\|\;)","", $get_Str);
}


if(!empty($_REQUEST['gubun']) && $_REQUEST['gubun']=="!QAZXCSDWASDRDCQWRDSGRDFVXCVSRSD" )
{
	
    if(!empty($_REQUEST['subscribe']))
    {
    	
    	$mesg="Thanks for subscribe ";
		$subscribe=SQL_fInjection($_REQUEST['subscribe']);
		
			
		// Create connection
			$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
			// Check connection
			$sql = " insert into newsletter (mb_email) VALUES('$subscribe')";
			
			
			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
			$conn->close();
    }
	
}


include "header.php";
?>

		<!-- End Header -->

		<!-- home-section 
			================================================== -->
		<section id="home-section" class="slider1">
			
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/1.jpg"  alt="slidebg1" data-lazyload="upload/slide/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
								data-x="30"
								data-y="310" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1200"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;color:#ffffff;background:#666666;padding:10px 30px;">Technology
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption small_text lfl tp-resizeme rs-parallaxlevel-0"
								data-x="30"
								data-y="390" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1800"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;color:#ffffff;background:#666666;padding:10px 30px;">The Bioink Solution's Gel4Cell is a gelatin-based hydrogel complex<br>
								that is optimally formulated for 3D bioprinting of cells, tissues and organs.<br>
								The Gel4cell bioink can be delivered through a fine nozzle onto substrates<br>
								to form 3D tissue structures.
							</div>
						</li>

						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/2.jpg"  alt="slidebg1" data-lazyload="upload/slide/2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="310" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1200"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;color:#ffffff;background:#666666;padding:10px 30px;">3-D BIOPRINTING 
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption small_text lfl tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="390" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1800"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;color:#ffffff;background:#666666;padding:10px 30px;">allows construction of biological tissue constructs that mimic<br>the structure and function of native tissues or organs.

							</div>

						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/2.jpg"  alt="slidebg1" data-lazyload="upload/slide/3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 3 -->
							<div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="310" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1200"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;color:#ffffff;background:#666666;padding:10px 30px;">Bioink Solutions
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption small_text lfl tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="390" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1800"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;color:#ffffff;background:#666666;padding:10px 30px;">committed to provide researchers with standardized bioinks that<br>
								are optimally formulated for bioprinting of cells, tissues and organs.
							</div>

						</li>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</section>
		<!-- End home section -->

		

		<!-- about-section 
			================================================== -->
		<section id="about-section">
			<div class="container">
				<div class="title-section">
					<h1>Science & Technology</h1>
				</div>
			</div>
			<div class="about-box">
				<div class="inner-about-box">
					<div class="about-post">
						<div class="about-post-content">
							<a href="/3d-bioprinting.php"><i class="fa fa-cubes"></i></a>
							<h2>3-D<br>Bioprinting</h2>
							<p>Possible to precisely place various cell types with hydrogel-based bio-inks in a 3-D architecture</p>
						</div>
						<div class="hover-about">
							<h2>Bioink Solutions, inc.</h2>
							<h1>3-D Bioprinting</h1>
							<span></span>
							<p>3-D bioprinting technology allows construction of biological tissue constructs that mimic the structure and function of native tissues or organs</p>
						</div>
					</div>
					<div class="about-post">
						<div class="about-post-content">
							<a href="/bio-ink-for-cell-printing.php"><i class="fa fa-eyedropper"></i></a>
							<h2>Bio-ink<br>for cell printing</h2>
							<p>Availability of hydrogel-based biomaterials that can serve as a cell delivery "bio-ink"</p>
						</div>
						<div class="hover-about">
							<h2>Bioink Solutions, inc.</h2>
							<h1>Bio-ink for cell printing</h1>
							<span></span>
							<p>A cell-laden "bio-ink" in the cartridge can be precisely dispensed by controlling actuating pressure or piston of the syringe pump</p>
						</div>
					</div>
					<div class="about-post">
						<div class="about-post-content">
							<a href="/biodegradable-polymers.php"><i class="fa fa-tint"></i></a>
							<h2>BIO-INKS FOR<br>POLYMER PRINTING</h2>
							<p>Controlled biodegradability, biomechanical, and biological properties can be provided. </p>
						</div>
						<div class="hover-about">
							<h2>Bioink Solutions, inc.</h2>
							<h1>BIO-INKS FOR POLYMER PRINTING</h1>
							<span></span>
							<p>Controlled biodegradability, biomechanical, and biological properties can be provided. 
</p>
						</div>
					</div>
					<div class="about-post">
						<div class="about-post-content">
							<a href="/applications.php"><i class="fa fa-plus-square-o"></i></a>
							<h2>Applications<br>&nbsp;</h2>
							<p>Bioprinting of implantable tissue-engineered constructs<br><br></p>
						</div>
						<div class="hover-about">
							<h2>Bioink Solutions, inc.</h2>
							<h1>Applications</h1>
							<span></span>
							<p>3-D human organoids that reflect human biology and key physiological features have been used for pharmacokinetic and toxicity testing.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End about section -->


		<!-- news-section 
			================================================== -->
		<section id="news-section">
			<div class="title-section white">
				<h1>Latest News</h1>
			</div>

			<div class="news-box">

				<div class="carousel-arrows owl-arrows">
					<a href="#" class="prev-link"><i class="fa fa-angle-left"></i></a>
					<a href="#" class="next-link"><i class="fa fa-angle-right"></i></a>
				</div>	
				<div id="owl-demo" class="owl-carousel">
<?php 

$con_board = mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_db, $con_board);

$query="SELECT a.*,b.bf_source,b.bf_file FROM  g4_write_news a,g4_board_file b where a.wr_id = b.wr_id and b.bo_table ='news' order by a.wr_datetime desc limit 0,8";

$result = mysql_query($query);

while($list = mysql_fetch_array($result)){

	$bf_source = $list['bf_source'];
	$bf_file = $list['bf_file'];
	$wr_id = $list['wr_id'];
	$wr_subject = $list['wr_subject'];
	$wr_content = $list['wr_content'];
	if(!empty($wr_content))$wr_content=substr( $wr_content, 1, 20 )
?>
	               <div class="item news-post">
						<img src="/data/file/news/<?php echo $bf_file; ?>" alt="" width="449" height="300">
						<div class="news-content">
							<div class="news-content-text">
								<h2><a href="/bbs/board.php?bo_table=news&wr_id=<?php echo $wr_id;?>"><?php echo $wr_subject;?></a></h2>
							</div>
						</div>
				   </div>
<?php 
}
?>
				</div>
			</div>
		</section>
		<!-- End news section -->
<!-- clients-section 
			================================================== -->
		<section id="clients-section">
			<div class="container">

				<div class="title-section white">
					<h1>Products</h1>
					<span></span>
				</div>

				<div class="testimonial-box">
					<ul class="bxslider">
						<li>
							<div style="margin:auto;width:150px">
								<p style="float:left;width:120px;text-align:left;padding:0;"><a href="/gel4cell.php" style="color:#1cbac8;font-weight:700;font-size:30px;">Gel4Cell</a></p><p style="float:left;width:30px;font-size:-1px;color:#1cbac8;padding-bottom:10px;text-align:left;padding:0;">&#174;</p>
							</div>
							<p style="clear:both;">The Gel4Cell <span style="font-size:-1px;">&#174;</span> kit is specifically developed and optimized for bioprinting of 3D structures. The Gel4Cell® kit includes optimally formulated gelatin-based hydrogel complex contained in syringes for easy dispensing. The kit also includes Gel-linker, which reinforces mechanical stability. A transparent hydrogel forms when contents are properly mixed and exposed to UV light. </p>
							
						</li>
						<li>
							<div style="margin:auto;width:300px">
								<p style="float:left;width:120px;text-align:left;padding:0;"><a href="/gel4cell-b-n-gel4cell-v.php" style="color:#1cbac8;font-weight:700;font-size:30px;">Gel4Cell</a></p><p style="float:left;width:15px;font-size:-1px;color:#1cbac8;padding-bottom:10px;text-align:left;padding:0;">&#174;</p><p style="float:left;width:160px;text-align:left;padding:0;"><a href="/gel4cell-b-n-gel4cell-v.php" style="color:#1cbac8;font-weight:700;font-size:30px;">-Peptides</a></p>
							</div>
							<p style="clear:both;">The Gel4Cell<span style="font-size:-1px;">&#174;</span>kit can be conjugated with growth factor-mimetic peptides for bioprinting of 3D structures. The Gel4Cell<span style="font-size:-1px;">&#174;</span>-BMP has been developed for bone tissue engineering applications, the Gel4 Cell<span style="font-size:-1px;">&#174;</span> -VEGF has been developed for accelerating vascularization when implanted, and the Gel4 Cell-TGF has been developed for cartilage tissue engineering applications.
</p>
						</li>
						<li>
							<div style="margin:auto;width:470px">
								<p style="float:left;width:120px;text-align:left;padding:0;"><a href="/polymerics-c-n-polyinks-l.php" style="color:#1cbac8;font-weight:700;font-size:30px;">PolyInks</a></p><p style="float:left;width:15px;font-size:-1px;color:#1cbac8;padding-bottom:10px;text-align:left;padding:0;">&#174;</p><p style="float:left;width:220px;text-align:left;padding:0;"><a href="/polymerics-c-n-polyinks-l.php" style="color:#1cbac8;font-weight:700;font-size:30px;">-PCL & PolyInks</a></p><p style="float:left;width:15px;font-size:-1px;color:#1cbac8;padding-bottom:10px;text-align:left;padding:0;">&#174;</p><p style="float:left;width:100px;text-align:left;padding:0;"><a href="/polymerics-c-n-polyinks-l.php" style="color:#1cbac8;font-weight:700;font-size:30px;">-PLA</a></p>
							</div>
							<p style="clear:both;">The biodegradable polymeric filaments are available for 3D printing. Poly(ε-caprolactone) (PCL, PolyInks<span style="font-size:-1px;">&#174;</span>-PCL) and polylactide (PLA, PolyInks<span style="font-size:-1px;">&#174;</span>-PLA) have been used for a wider range of tissue engineering applications than any other type of biodegradable polymers.

</p>	
						</li>
						<li>
							<div style="margin:auto;width:250px">
								<p style="float:left;width:120px;text-align:left;padding:0;"><a href="/polymerics-cls.php" style="color:#1cbac8;font-weight:700;font-size:30px;">PolyInks</a></p><p style="float:left;width:15px;font-size:-1px;color:#1cbac8;padding-bottom:10px;text-align:left;padding:0;">&#174;</p><p style="float:left;width:110px;text-align:left;padding:0;"><a href="/polymerics-cls.php" style="color:#1cbac8;font-weight:700;font-size:30px;">-PLCLs</a></p>
							</div>
							<p style="clear:both;">The synthetic polymers with controlled biodegradation properties can be used as an important part of tissue engineering and drug delivery applications. These polymers have been synthesized with chemical structures tailored to optimize physical properties for 3D printing.

</p>
						</li>
					</ul>
				</div>


			</div>
		</section>
		<!-- End clients section -->

		<!-- subscribe-line-section 
			================================================== -->
		<section id="subscribe-line-section">
			<div class="container">
				
				<form name="subscribe" class="subscribe"> 
				    <input type=hidden name=gubun value='!QAZXCSDWASDRDCQWRDSGRDFVXCVSRSD'>
					<label for="subscribe">SUBSCRIBE TO OUR NEWSLETTER</label>
					<input type="text" name="subscribe" id="subscribe" placeholder="enter your email address"/>
					<input type="submit" name="submit-subs" id="subscribe-submit" value="Subscribe"/>
				</form>
			</div>
		</section>
		<!-- End subscribe-line section -->

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
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/raphael-min.js"></script>
	<script type="text/javascript" src="js/DevSolutionSkill.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<!-- Revolution slider -->
	<script type="text/javascript">

		jQuery(document).ready(function() {
						
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:10000,
				startwidth:1140,
				startheight:740,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				navigationArrows:"none",
				
				touchenabled:"on",
				onHoverStop:"off",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
				parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:60,
						
				shadow:0,

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
										
										
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});
							
		});

		// skills section
		jQuery(function(){
			$('.skills-box').appear(function() {
				DevSolutionSkill.init('circle1'); 
				DevSolutionSkill.init('circle2'); 
				DevSolutionSkill.init('circle3'); 
				DevSolutionSkill.init('circle4');
				DevSolutionSkill.init('circle5');
				DevSolutionSkill.init('circle6');
			});
		});
		
	</script>
</body>
</html>