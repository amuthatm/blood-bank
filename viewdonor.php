<html>
<head>
</head>
<body background="blood-donation-3.jpg">

<?php
$con = mysqli_connect("localhost","root","","bloodbank");
//mysqli_select_db('bloodbank',$con);


?>

<form method="get" action="viewdonor.php"  >

  <tr> <td><label>District:</label></td>
       <td><select name="district" id="district">
        <option value="Thiruvananthapuram">Thiruvananthapuram</option>  
        <option value="Kollam"> Kollam</option> 
        <option value="Palakkad"> Palakkad</option>                         
        <option value="Ernakulam"> Ernakulam</option> 
        <option value="Kottayam"> Kottayam</option>  
           </select> </td>
    </tr> 
  <tr> <td><label>Blood group:</label></td>
       <td><select name="Bgroup" id="Bgroup">
        <option value="B+"> B+</option>  
        <option value="B-"> B-</option> 
        <option value="O+"> O+</option> 
        <option value="O-"> O-</option>  
        <option value="A+"> A+</option>        
        <option value="AB+">AB+</option>
        <option value="AB-"> AB-</option> 
        </select> </td>
   </tr> 
    <tr>
        <input type="submit" value="Submit" />
    </tr>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

if (isset($_GET['district']))
$district = $_GET['district'];
if(isset($_GET['Bgroup']))
$bg=$_GET['Bgroup'];
if(isset($_GET['district']) && isset($_GET['Bgroup'])){
$sql="select * from donor_details where district='$district' and bloodgroup='$bg'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){  
   $name=$row['name'];
   $address=$row['address'];
   $age=$row['age'];
   $bloodgroup=$row['bloodgroup'];
   $district=$row['district'];
   $weight=$row['weight'];
   $contactno=$row['contactno'];
   $gender=$row['gender'];
   echo $name." ".$contactno." ";
   }}
   else{
   echo ".....................no results....................";
   }}
mysqli_close($con);

      ?>
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
 <br>

<button style="height:58px; width:229.25px" onclick="window.location='default.html';" style="border:thin maroon dashed" style="background-color:maroon" style="font:menu" class="auto-style4" >
<h3>HOME</h3>
	</button>
	
	<button  class="myButton" style="height:58px; width:229.25px" onclick="window.location='register.html';" style="border:thin maroon dashed" style="background-color:maroon" style="font:menu" class="auto-style4" >
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