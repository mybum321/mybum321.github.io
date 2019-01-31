<?
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$begin_time = get_microtime();

if (!$g4['title'])
    $g4['title'] = $config['cf_title'];

// 쪽지를 받았나?
if ($member['mb_memo_call']) {
    $mb = get_member($member[mb_memo_call], "mb_nick");
    sql_query(" update {$g4[member_table]} set mb_memo_call = '' where mb_id = '$member[mb_id]' ");

    alert($mb[mb_nick]."님으로부터 쪽지가 전달되었습니다.", $_SERVER[REQUEST_URI]);
}


// 현재 접속자
//$lo_location = get_text($g4[title]);
//$lo_location = $g4[title];
// 게시판 제목에 ' 포함되면 오류 발생
$lo_location = addslashes($g4['title']);
if (!$lo_location)
    $lo_location = addslashes($_SERVER['REQUEST_URI']);
$lo_url = addslashes($_SERVER['REQUEST_URI']);
if (strstr($lo_url, "/$g4[admin]/") || $is_admin == "super") $lo_url = "";

// 자바스크립트에서 go(-1) 함수를 쓰면 폼값이 사라질때 해당 폼의 상단에 사용하면
// 캐쉬의 내용을 가져옴. 완전한지는 검증되지 않음
header("Content-Type: text/html; charset=$g4[charset]");
$gmnow = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: 0"); // rfc2616 - Section 14.21
header("Last-Modified: " . $gmnow);
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> -->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$g4['charset']?>">
<title>Bioinksolutions</title>
<link rel="stylesheet" href="<?=$g4['path']?>/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="/css/settings.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen">
</head>
<script type="text/javascript">
// 자바스크립트에서 사용하는 전역변수 선언
var g4_path      = "<?=$g4['path']?>";
var g4_bbs       = "<?=$g4['bbs']?>";
var g4_bbs_img   = "<?=$g4['bbs_img']?>";
var g4_url       = "<?=$g4['url']?>";
var g4_is_member = "<?=$is_member?>";
var g4_is_admin  = "<?=$is_admin?>";
var g4_bo_table  = "<?=isset($bo_table)?$bo_table:'';?>";
var g4_sca       = "<?=isset($sca)?$sca:'';?>";
var g4_charset   = "<?=$g4['charset']?>";
var g4_cookie_domain = "<?=$g4['cookie_domain']?>";
var g4_is_gecko  = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
var g4_is_ie     = navigator.userAgent.toLowerCase().indexOf("msie") != -1;
<? if ($is_admin) { echo "var g4_admin = '{$g4['admin']}';"; } ?>
</script>
<script type="text/javascript" src="<?=$g4['path']?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?=$g4['path']?>/js/common.js"></script>
<body topmargin="0" leftmargin="0" <?=isset($g4['body_script']) ? $g4['body_script'] : "";?>>
<a name="g4_head"></a>
<!-- Container -->
	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="/images/bioinksolution.png"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="drop"><a href="/3d-bioprinting.php">Science & Technology</a>
								<ul class="drop-down">
									<li><a href="/3d-bioprinting.php">3-D bioprinting</a></li>
									<li><a href="/bio-ink-for-cell-printing.php">Bio-ink for cell printing</a></li>
									<li><a href="/biodegradable-polymers.php">BIO-INKS FOR POLYMER PRINTING</a></li>
									<li><a href="/applications.php">Applications</a></li>
								</ul>
							</li>

							<li class="drop"><a href="/gel4cell.php">Products</a>
								<ul class="drop-down">
									<li><a href="/gel4cell.php">Gel4Cell<span style="font-size:-1px;padding-bottom:10px;text-align:left;padding:0;">®</span></a></li>
									<li><a href="/gel4cell-b-n-gel4cell-v.php">Gel4Cell<span style="font-size:-1px;padding-bottom:10px;text-align:left;padding:0;">®</span>-Peptides</a></li>
									<li><a href="/polymerics-c-n-polyinks-l.php">PolyInks<span style="font-size:-1px;padding-bottom:10px;text-align:left;padding:0;">®</span>-PCL & PolyInks<span style="font-size:-1px;padding-bottom:10px;text-align:left;padding:0;">®</span>-PLA</a></li>
									<li><a href="/polymerics-cls.php">PolyInks<span style="font-size:-1px;padding-bottom:10px;text-align:left;padding:0;">®</span>-PLCLs</a></li>
								</ul>
							</li>
							<li class="drop"><a href="/company.php">Company</a>
								<ul class="drop-down">
									<li><a href="/company.php">About Bioink Solutions, Inc.</a></li>
									<li><a href="/contactus.php">Contact info</a></li>
								</ul>
							</li>
							<li class="drop"><a href="/orderform.php">Order</a></li>
							<!--
							<li><a href="/investors.php">Collaboration & Partnership</a>
								<ul class="drop-down">
									<li><a href="/investors.php">Collaboration</a></li>
									<li><a href="/partners.php">Partnership</a></li>
								</ul>
							</li>
							 -->
							<li class="search drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
