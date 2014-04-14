<?php
$con=mysqli_connect("localhost","designve_ike","Barnabush0pkins","designve_main");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Whoops, looks like something went wrong, we'll get on that lickety-split! " . mysqli_connect_error();
  }


(string)$subject = $_POST['subject'];  
(string)$name = $_POST['name'];  
(string)$email = $_POST['email'];
(string)$message = $_POST['message'];
  
$sql="INSERT INTO contact (Name, Email, Subject, Message)
VALUES
('$name','$email','$subject','$message')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }





mysqli_close($con);


$To = 'designverk@outlook.com'; 
$Subject = $subject ; 
$Message =  "Dear Designverk, <br/>".$message."<br/>Warm regards,<br/>".$name; 
$Headers = "From:".$email."\r\n" . 
"Reply-To:".$email."\r\n" . 
"Content-type: text/html; charset=UTF-8 \r\n"; 
  
mail($To, $Subject, $Message, $Headers); 

?>

<!DOCTYPE>
<HTML>
<HEAD>

<TITLE> Thank you </TITLE>
<meta charset='utf8'>
<meta name="viewport" content="width=device-width, initial-scale=1">

<STYLE>
*{margin:0;}

</STYLE>
</HEAD>
<BODY>

Thank you


</div>
</BODY>
</HTML>