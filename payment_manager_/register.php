
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
 $fam_id = $_REQUEST['id'];
 $fam_name =  $_REQUEST['name'];
 $fam_address = $_REQUEST['address'];
 $fam_phone =  $_REQUEST['phone'];

  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO family  VALUES ('$fam_id','$fam_name',
     '$fam_address','$fam_phone')";
  
 if(mysqli_query($conn, $sql)){
     echo "<h3>data stored in a database successfully."
         . " Please browse your localhost php my admin"
         . " to view the updated data</h3>";

         echo nl2br("\n$fam_id\n $fam_name\n "
         . "$fam_address\n $fam_phone");
 } else{
     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>

