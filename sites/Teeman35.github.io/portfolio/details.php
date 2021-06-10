<?php
if ($_POST) {
$errMsg = "";
$CN = $_POST["name"];
$Email = $_POST["email"];
$Service = $_POST["choice"];
$Comment = $_POST["comment"];
$errMsg = "";
if (empty($CN))
$errMsg.="Please prodive name.<br>";
if (empty($Email))
$errMsg.="Please provide email.<br>";
if (empty($Service))
$errMsg.="Please select one of the available services.<br>";
if (!empty($errMsg))
{
 $to = 'mbathaddeus9@gmail.com';
$subject = 'Service needed';
$message = '
<html>
<head>
<title>job offer</title>
</head>
<body>
<p style="background-color:red;"> Please treat as urgent</p>
<table>
<tr><th>Name</th><th>Email</th><th>Choice</th><th>Comment</th></tr>
<tr><td>' . $_POST["name"] . '</td><td>' . $_POST["email"] . '</td><td>' . $_POST["choice"] . '</td><td>' . $_POST["comment"] . '</td></tr>
</table>

</body>
</html>
';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($to, $subject, $message, $headers);
}
else
echo $errMsg;
}
?>