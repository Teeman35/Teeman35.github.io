<?php


$conn = mysqli_connect('localhost','root', '', 'tadeus_ng');
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error($conn));
  }


If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['message']=='')
{
Echo "please fill the empty field.";

}
else {
$query=mysqli_query($conn,"insert into Customers_Order(name,email,message) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['message']."')");
$res=($query);
If($res)
{
Echo "Your message has been successfully sent. Thank you";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>