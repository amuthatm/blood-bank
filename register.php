<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-decoration: underline;
}
</style>
</head>

<body background="blood-donation-3.jpg">
<form name="Reg" method="Post" action="Process.php">
   <h1 class="auto-style1">Registration Form</h1>       
	&nbsp;  <table border=0>
   <tr> <td><label>Name:</label></td>
       <td><input type="text" name="txtname" id="txtname" /></td>
   </tr>   
    <tr> <td><label>Address:</label></td>
        <td><textarea rows="5" cols="15" name="txtaddress" ></textarea> </td>
   </tr>  
   <tr> <td><label>Age:</label></td>
       <td><input type="text" name="txtage" id="txtage" /></td>
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
   <tr> <td><label>District:</label></td>
       <td><select name="district" id="district">
        <option value="Thiruvananthapuram">Thiruvananthapuram</option>  
        <option value="Kollam"> Kollam</option> 
        <option value="Palakkad"> Palakkad</option>                         
        <option value="Ernakulam"> Ernakulam</option> 
        <option value="Kottayam"> Kottayam</option>  
           </select> </td>
    </tr> 
   <tr> <td><label>Weight:</label></td>
       <td><input type="text" name="txtweight" id="txtweight" /></td>
   </tr>        
   <tr> <td><label>Contact no:</label></td>
       <td><input type="text" name="txtcontact" id="txtcontact" /></td>
   </tr>    
    <tr> <td><label>Gender:</label></td>
       <td><input type="radio" name="gen" value="Male" checked="TRUE">Male</input><input type="radio" name="gen" value="Female">Female</input></td>
   </tr>       
       
    <tr><td><input type="submit" name="submit" value="submit" /> <br />
		<br />
		<br />
		<br />
        </td></tr>   
       
       
        </table>    
    </form>

<div style="height: 74px">
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

</div>

</body>

</html>
