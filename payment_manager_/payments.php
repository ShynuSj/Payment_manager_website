<?php
 $servername = "localhost:3305";
 $username = "root";
 $password = "dynamic";

// Create connection
 $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$retval = mysqli_select_db( $conn, 'st_george_' );


  
 // Taking all 5 values from the form data(input)
 $name =  $_REQUEST['name'];
 $address = $_REQUEST['address'];
 $date =  $_REQUEST['date'];
 $amount = $_REQUEST['amount'];
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO monthly_pay  VALUES ('$name',
     '$address','$date','$amount')";
  
 if(mysqli_query($conn, $sql)){
     echo "<h3>data stored in a database successfully."
         . " Please browse your localhost php my admin"
         . " to view the updated data</h3>";

     echo nl2br("\n$name\n $address\n "
         . "$date\n $amount");
 } else{
     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>