<?php

$conn = mysqli_connect('localhost','root', '', 'tadeus_ng');
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error($conn));
  }
$result =($conn, insert into customers_order values('.$_REQUEST['name'].', '.$_REQUEST['email'].', '.$_REQUEST['message'].'));
$res=mysqli_query($result);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}
 
?>
        </center>
</body>
</html>