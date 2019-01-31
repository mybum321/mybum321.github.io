<?php
//sunbayint.com/mailSend.php
//http://sunbayint.com/request-quote.html
$name=$_POST['name'];
$mail=$_POST['mail'];
$Telephone=$_POST['Telephone'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcd=$_POST['zipcd'];
$promotion=$_POST['promotion'];



$prd1 = isset($_POST['prd1']) ? $_POST['prd1'].",<br>" : "";
$prd2 = isset($_POST['prd2']) ? $_POST['prd2'].",<br>" : "";
$prd3 = isset($_POST['prd3']) ? $_POST['prd3'].",<br>" : "";
$prd4 = isset($_POST['prd4']) ? $_POST['prd4'].",<br>" : "";

$prd_contents="<table><tr><td>Name</td><td>qty</td></tr>";
if(!empty($_POST['prd1']))$prd_contents.="<tr><td>".$_POST['prd1']."</td><td> ".$_POST['prd1_qty']." </td></tr>";
if(!empty($_POST['prd2']))$prd_contents.="<tr><td>".$_POST['prd2']."</td><td> ".$_POST['prd2_qty']." </td></tr>";
if(!empty($_POST['prd3']))$prd_contents.="<tr><td>".$_POST['prd3']."</td><td> ".$_POST['prd3_qty']." </td></tr>";
if(!empty($_POST['prd4']))$prd_contents.="<tr><td>".$_POST['prd4']."</td><td> ".$_POST['prd4_qty']." </td></tr>";
if(!empty($_POST['prd5']))$prd_contents.="<tr><td>".$_POST['prd5']."</td><td> ".$_POST['prd5_qty']." </td></tr>";
if(!empty($_POST['prd6']))$prd_contents.="<tr><td>".$_POST['prd6']."</td><td> ".$_POST['prd6_qty']." </td></tr>";
if(!empty($_POST['prd7']))$prd_contents.="<tr><td>".$_POST['prd7']."</td><td> ".$_POST['prd7_qty']." </td></tr>";
if(!empty($_POST['prd8']))$prd_contents.="<tr><td>".$_POST['prd8']."</td><td> ".$_POST['prd8_qty']." </td></tr>";
if(!empty($_POST['prd9']))$prd_contents.="<tr><td>".$_POST['prd9']."</td><td> ".$_POST['prd9_qty']." </td></tr>";
$prd_contents.="</table>";



//pickup address


$comment=$_POST['comment'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Order Mail </title>
</head>

<body>
<?php

$email_template="
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Order Form</title>
<style type='text/css'>
.signiture {
	font-size: 14px;
	font-style: italic;
	color: #933;
}
</style>
</head>

<body>
<h3>Order Form</h3>
<table border='1'>
<tr><td><strong>name</strong></td><td>$name</td></tr>
<tr><td><strong>email</strong></td><td>$mail</td></tr>
<tr><td><strong>phone</strong></td><td>$Telephone</td></tr>
<tr><td><strong>address1</strong></td><td>$address1</td></tr>
<tr><td><strong>address2</strong></td><td>$address2</td></tr>
<tr><td><strong>city</strong></td><td>$city</td></tr>
<tr><td><strong>state</strong></td><td>$state</td></tr>
<tr><td><strong>zipcd</strong></td><td>$zipcd</td></tr>
</table>
<br><br>
*Product<br>
".$prd_contents."
*others information<br>
<table border='1'>
<tr><td><strong>promotion code</strong></td><td>$promotion</td></tr>
<tr><td><strong>comment</strong></td><td>$comment</td></tr>
</table>
<br><br>
</body></html>";

$to = $e_mail;
$subject = "request order Mail";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@bioinksolution.com' . "\r\n";
$headers .= 'Cc: tgchoi72@gmail.com,order@bioinksolution.com' . "\r\n";


mail($to,$subject,$email_template,$headers);



echo "
        <html><title>Mail Send </title><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></html><body>
        <script type='text/javascript'>
        alert(' Thanks for the Order !');
        history.go(-1);
        </script>
        </body>";


//echo $email_template;
?>
