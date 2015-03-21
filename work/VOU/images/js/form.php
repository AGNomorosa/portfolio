<?php
$my_email = "mmccann@natelli.com, cleitner@natelli.com, kstarnes@nvrinc.com, Logan Wilcox logan@parkwoodhomes.com, kwright@nvrinc.com";
$continue = "../thankYou.html";
if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}


while(list($key,$value) = each($_POST)){if(!(empty($value))){$set=1;}$message = $message . "$key: $value\n\n";} if($set!==1){header("location: $_SERVER[HTTP_REFERER]");exit;}

$message = $message . "--";
$message = stripslashes($message);

$subject = "Contact Form";
$headers = "From: Website" . $Email . "\n" . "Return-Path: " . $Email . "\n" . "Reply-To: " . $Email . "\n";

mail($my_email,$subject,$message,$headers);

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>--</title>
<script type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<body onLoad="MM_goToURL('parent','../thankYou.html');return document.MM_returnValue">
</body>
</html>
