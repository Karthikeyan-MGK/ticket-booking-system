<?php 
include("includes/header.php");

ob_start();

$timezone = date_default_timezone_set("Asia/Calcutta");

$con = mysqli_connect("localhost", "root", "","booking");

if(mysqli_connect_errno())
{
    echo "Failed to connect: " . mysqli_connect_errno();
}

$fname = ""; 
$date = ""; 
$from = ""; 
$to= ""; 
$time = ""; 
$age = ""; 
$error_array = array();

if(isset($_POST['register'])) {

	
	$fname = strip_tags($_POST['tra_name']); 
	$fname = ucfirst(strtolower($fname)); 
	
	$from = strip_tags($_POST['statefrom']); 
    
    
    $to = strip_tags($_POST['stateto']); 
	

    $age = strip_tags($_POST['age']);

    $time= strip_tags($_POST['time']);

    $date = strip_tags($_POST['bookingdate']);
    
    $query = mysqli_query($con, "INSERT INTO details( `full_name`, `date`, `from`, `to`, `time`, `age`) VALUES ('$fname', '$date', '$from', '$to', '$time', '$age')");

}
     
?>
      <div class="container">
            <span class="text1">Book your ticket here!!</span>
     </div> 
     <div class="bookingbox">
         <form action="index.php" class="booking">
                <label for="tra_name">Name:</label>
                 <input type="text" name="tra_name" placeholder="Full name" value="<?php 
                        if(isset($_SESSION['reg_fname'])) {
                            echo $_SESSION['reg_fname'];
                        } 
                        ?>" required>

                <label id="date" for="bookingdate">Journy date :</label>
                <input type="date" name="bookingdate">
                <br><br>
                <label for="statefrom">From:</label>
                <select type="text" name="statefrom" id="statefrom" class="form-control" placeholder="From">
                            <option value="Select from">Select from</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                    </select>
                            <label id="statetolab"for="stateto">To:</label>
                    <select type="text" name="stateto" id="stateto" class="to-control" placeholder="From">
                            <option value="Select to">Select to</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>        
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                    </select>
                    <br><br>
                    <label for="time">Availablity</label>
                    <select  type="time" name="time" id="time">
                            <option value="select time"> time </option>
                            <option value="9.45AM"> 9.45AM </option>
                            <option value="11.30AM">11.30AM</option>
                            <option value="3.30PM">3.30PM</option>
                            <option value="7.45PM">7.45PM</option>
                    </select>
                    <label id="age" for="age">Selece age:</label>
                    <select type="number" name="age" class="age">
                            <option value="select age"> Select age </option>
                            <option value="5 - 20"> 5-20 </option>
                            <option value="20-35"> 20-35 </option>
                            <option value="35-60"> 35-60 </option>
                            <option value="more than 60"> more than 60 </option>
                    </select>
                    <br><br>
                    <input id="submit" type="submit" name="register" value="Confirm">
          </form>
     </div>
            
        
         <div>
             <img src="files/images/background/indexback.jpg" id="side">
         </div>
         
    </div>   
    </body>
</html>