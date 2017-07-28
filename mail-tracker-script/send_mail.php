<?php
// Example
// http://www.phpdevtips.com/2013/06/email-open-tracking-with-php-and-mysql/

$to = "devendra.singh@vccircle.com";
$subject = "HTML email";

$message = '<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<img src="http://uploads.vccircle.net/2017/mailer/intra-links/trackmailer.php?e=devendra.singh@vccircle.com&domain=vcc" style="width:1px;height:1px;" />
</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

$result = mail($to,$subject,$message,$headers);
$result;
echo "<br />";
(int) $result;
die('==');
?>

