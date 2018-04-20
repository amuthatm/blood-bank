<html>
<head>
<title>Registration</title>
</head>

<body>
<form name="Reg" method="Post" action="Process.php">
   <h1>Registration Form</h1>       
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
       <td><input type="radio" name="gen" value="Male">Male<input type="radio" name="gen" value="Female">Female</td>
   </tr>       
       
    <tr><td><input type="submit" name="submit" value="submit" />
        </td></tr>   
       
       
        </table>    
    </form>
    </body>
</html>
       
       
       
       
       