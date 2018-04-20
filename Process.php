<html>
<body background="blood-donation-3.jpg">
<?php

$name=$_POST["txtname"];
$address=$_POST["txtaddress"];
$age=$_POST["txtage"];
$bloodgroup=$_POST["Bgroup"];
$district=$_POST["district"];
$weight=$_POST["txtweight"];
$contactno=$_POST["txtcontact"];
$gender=$_POST["gen"];
$con=mysqli_connect("localhost","root","","bloodbank");
//mysqli_slect_db("bloodbank",$con);
$query="insert into donor_details(name,address,age,bloodgroup,district,weight,contactno,gender) values('$name','$address','$age','$bloodgroup','$district','$weight','$contactno','$gender')";
if (!($name)||!($address)||!($age)||!($bloodgroup)||!($district)||!($weight)||!($contactno)||!($gender))
{echo "<script type='text/javascript'>alert('Registration Unsuccessful'); </script>";}
else{
mysqli_query($con,$query);
if($query)
{
   echo "<script type='text/javascript'>alert('Registration success'); </script>";
}
else
{
 echo 'Registration unsuccessful';
}}
mysqli_close($con);
?>
<p><h3>...................THANKYOU FOR USING OUR PAGE.......................</h3></p>
<br>
 <br>
 <br>    
 <br> 
 <br>
 <br>
 <br> 
 <br> 
 <br>
 <br>
 <br> 
 <br> 
 <br>
 <br>
 <br> 
 <br> 
 <br>
 <br>
 <br> 
 <br> 
 <br>
 <br>
 <br>    
 <br> 
 <br>
 <br>
 <br> 
 <br> 
 <br>
 <br>
 <button style="height:58px; width:229.25px" onclick="window.location='default.html';" style="border:thin maroon dashed" style="background-color:maroon" style="font:menu" class="auto-style4" >
<h3>HOME</h3>
	</button>
	
	<button  class="myButton" style="height:58px; width:229.25px" onclick="window.location='register.php';" style="border:thin maroon dashed" style="background-color:maroon" style="font:menu" class="auto-style4" >
<h3>REGISTER</h3>
	</button>
<button style="height:58px; width:229.25px" onclick="window.location='about us.html';" style="border:thin maroon dashed" style="background-color:maroon" style="font:menu" class="auto-style4" >
<h3>ABOUT US</h3>
	</button>
<button style="height:58px; width:229.25px" onclick="window.location='view.html';" style="border:thin maroon dashed" style="background-color:maroon" style="font:menu" class="auto-style4" >
<h3>VIEW DONOR</h3>
	</button>


</body>
</html>