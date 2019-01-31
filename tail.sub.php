<footer>
			<div class="container">
				<div class="footer-widgets">
					<div class="row">
						<div class="col-md-3">
							<div class="widgets text-widget">
								<h2>Bioink Solutions, inc.</h2>
								<p>Bioink solutions's mission is to be our customer's trusted partner in translating scientific discoveries to the clinic.</p>
								<ul class="social-list">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widgets tags-widget">
								<h2>Contact Us</h2>
								<p>
								807 Hoguk-ro,<br>
								Buk-gu, Daegu 41404<br>
								South Korea<br>
								Tel : +82-53-745-5447<br>
								Fax: +82-53-745-5447</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widgets flickr-widget">
								<h2>Collaboration & PARTNERSHIP</h2>
								<p></p>
								<ul class="nav-list">
									<li><a href="investors.php">Collaboration</a></li>
									<li><a href="partners.php">PARTNERSHIP</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widgets nav-widget">
								<h2>Navigation</h2>
								<ul class="nav-list">
									<li><a href="3d-bioprinting.php">Science & Technology</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="gel4cell.php">Products</a></li>
									<li><a href="company.php">Company</a></li>
									<li><a href="investors.php">COLLABORATION  & Partnership</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<p class="copyright">
					Copyright 2015 &copy; Bioink solutions,inc. All rights reserved.
				</p>
			</div>
		</footer>
		
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="/js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="/js/plugins-scroll.js"></script>
	<script type="text/javascript" src="/js/waypoint.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="<?=$g4['path']?>/js/wrest.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71711389-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- 새창 대신 사용하는 iframe -->
<iframe width=0 height=0 name='hiddenframe' style='display:none;'></iframe>

<? if ($is_admin == "super") { ?><!-- <div style='float:left; width:<?=$table_width?>px; text-align:center;'>RUN TIME : <?=get_microtime()-$begin_time;?><br></div> --><? } ?>

</body>
</html>

<?
$tmp_sql = " select count(*) as cnt from $g4[login_table] where lo_ip = '$_SERVER[REMOTE_ADDR]' ";
$tmp_row = sql_fetch($tmp_sql);
//sql_query(" lock table $g4[login_table] write ", false);
if ($tmp_row['cnt'])
{
	$tmp_sql = " update $g4[login_table] set mb_id = '$member[mb_id]', lo_datetime = '$g4[time_ymdhis]', lo_location = '$lo_location', lo_url = '$lo_url' where lo_ip = '$_SERVER[REMOTE_ADDR]' ";
	sql_query($tmp_sql, FALSE);
}
else
{
	$tmp_sql = " insert into $g4[login_table] ( lo_ip, mb_id, lo_datetime, lo_location, lo_url ) values ( '$_SERVER[REMOTE_ADDR]', '$member[mb_id]', '$g4[time_ymdhis]', '$lo_location',  '$lo_url' ) ";
	sql_query($tmp_sql, FALSE);

	// 시간이 지난 접속은 삭제한다
	sql_query(" delete from $g4[login_table] where lo_datetime < '".date("Y-m-d H:i:s", $g4[server_time] - (60 * $config[cf_login_minutes]))."' ");

	// 부담(overhead)이 있다면 테이블 최적화
	//$row = sql_fetch(" SHOW TABLE STATUS FROM `$mysql_db` LIKE '$g4[login_table]' ");
	//if ($row['Data_free'] > 0) sql_query(" OPTIMIZE TABLE $g4[login_table] ");
}
//sql_query(" unlock tables ", false);
?>