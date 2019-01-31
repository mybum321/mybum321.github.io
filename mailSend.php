<?php
//sunbayint.com/mailSend.php
//http://sunbayint.com/request-quote.html
$com_name=$_POST['com_name'];
$contact_name=$_POST['contact_name'];
$baddress=$_POST['baddress'];
$bstate=$_POST['bstate'];
$bzipcode=$_POST['bzipcode'];
$bphone=$_POST['bphone'];
$fax=$_POST['fax'];
$email=$_POST['email'];

//Terms of Delivery
$tod1 = isset($_POST['tod1']) ? $_POST['tod1'].",<br>" : "";
$tod2 = isset($_POST['tod2']) ? $_POST['tod2'].",<br>" : "";
$tod3 = isset($_POST['tod3']) ? $_POST['tod3'].",<br>" : "";
$tod4 = isset($_POST['tod4']) ? $_POST['tod4'].",<br>" : "";
$tod5 = isset($_POST['tod5']) ? $_POST['tod5'].",<br>" : "";
$tod5_1 = isset($_POST['tod5_1']) ? $_POST['tod5_1'].",<br>" : "";

$tod1_t=$tod1.$tod2.$tod3.$tod4.$tod5.$tod5_1;

$tod6 = isset($_POST['tod6']) ? $_POST['tod6'].",<br>" : "";
$tod7 = isset($_POST['tod7']) ? $_POST['tod7'].",<br>" : "";
$tod8 = isset($_POST['tod8']) ? $_POST['tod8'].",<br>" : "";
$tod9 = isset($_POST['tod9']) ? $_POST['tod9'].",<br>" : "";
$tod10 = isset($_POST['tod10']) ? $_POST['tod10'].",<br>" : "";
$tod11 = isset($_POST['tod11']) ? $_POST['tod11'].",<br>" : "";

$tod2_t=$tod6.$tod7.$tod8.$tod9.$tod10.$tod11;

//pickup address


$pupcountry=$_POST['pupcountry'];
$pupatext=$_POST['pupatext'];
$pupastate=$_POST['pupastate'];
$pupazipcode=$_POST['pupazipcode'];

$pick_address=$pupatext." ".$pupastate." ".$pupazipcode." ".$pupcountry;

//Destination Address
$datcountry=$_POST['datcountry'];
$datext=$_POST['datext'];
$dastate=$_POST['dastate'];
$dazipcode=$_POST['dazipcode'];
$dest_address=$datext." ".$dastate." ".$dazipcode." ".$datcountry;


$Commodity=$_POST['Commodity'];
$pValue=$_POST['pValue'];
$Insurance=$_POST['Insurance'];
$Pieces=$_POST['Pieces'];
$pType=$_POST['Type'];
$Gross=$_POST['Gross'];
$Dimensions=$_POST['Dimensions'];
$Volume=$_POST['Volume'];
$CBM=$_POST['CBM'];

$OTHERS_INFOR=$_POST['OTHERS_INFOR'];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mail Test</title>
</head>

<body>
<?php 
 echo $com_name."<br>";

$email_template="
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>
<style type='text/css'>
.signiture {
	font-size: 14px;
	font-style: italic;
	color: #933;
}
</style>
</head>

<body>		

<table border='1'>
<tr><td><strong>Company</strong></td><td>$com_name</td></tr>
<tr><td><strong>Contact Name</strong></td><td>$contact_name</td></tr>
<tr><td><strong>phone</strong></td><td>$bphone</td></tr>
<tr><td><strong>fax</strong></td><td>$fax</td></tr>
<tr><td><strong>e-mail</strong></td><td>$email</td></tr>
<tr><td><strong>address</strong></td><td>$baddress</td></tr>
<tr><td><strong>state</strong></td><td>$bstate $bzipcode</td></tr>
</table>
<br><br>
*Terms of Delivery
<table border='1'>
<tr><td></td></tr>
<tr><td>$tod1_t</td></tr>
<tr><td>$tod2_t</td></tr>
</table>
<br><br>
*Address
<table border='1'>
<tr><td><strong>Pick up Address</strong></td><td>$pick_address</td></tr>
<tr><td><strong>Destination Address</strong></td><td>$dest_address</td></tr>
</table>
<br><br>
*others information 
<table border='1'>
<tr><td><strong>Commodity</strong></td><td>$Commodity</td></tr>
<tr><td><strong>Value</strong></td><td>$pValue</td></tr>
<tr><td><strong>Insurance</strong></td><td>$Insurance</td></tr>
<tr><td><strong>Pieces</strong></td><td>$Pieces</td></tr>
<tr><td><strong>pType</strong></td><td>$pType</td></tr>
<tr><td><strong>Gross</strong></td><td>$Gross</td></tr>
<tr><td><strong>Dimensions</strong></td><td>$Dimensions</td></tr>
<tr><td><strong>Volume</strong></td><td>$Volume</td></tr>
<tr><td><strong>CBM</strong></td><td>$CBM</td></tr>
<tr><td><strong>OTHERS_INFOR</strong></td><td>$OTHERS_INFOR</td></tr>
</table>
<br><br>
</body></html>";

$to = $e_mail;
$subject = "request quote Mail";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@sunbayint.com>' . "\r\n";
$headers .= 'Cc: peter@sunbayint.com,pcahn621@gmail.com,info@sunbayint.com' . "\r\n";


mail($to,$subject,$email_template,$headers);

//echo $email_template;
echo "
        <html><title>Mail Send </title><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></html><body>
        <script type='text/javascript'>
        alert(' Thanks for the Quotations !');
        history.go(-1);
        </script>
        </body>";
?>