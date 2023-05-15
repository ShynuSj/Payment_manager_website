<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Family.St.George</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/371aaf7ac9.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="family">
        <nav class="navbar">
           
            <div class="fam-links" id="famlinks">
                <div class="icon closemenu">
                    <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                </div>
                
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="http://localhost/test/families.php">FAMILIES</a></li>
                        <li><a href="payments.html">PAYMENTS</a></li>
                        <li><a href="">ACCOUNT</a></li>
                    </ul>
                    
                    <div class="icon openmenu" id="openmenu">
                        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
                    </div>       
            </div>
            
            
            
            
            
        </nav>
        <h1>Famliy Register</h1>
        <div>
            <table class="family_list">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>address</th>
                    <th>phone</th>
                </tr>
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

            $sql = "SELECT id, name, address, phone FROM family";
            $result = $conn->query($sql);
            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["address"] . "</td>
                    <td>" . $row["phone"] . "</td>
                </tr>";
            }
            echo "</table>";
            $conn->close();
            ?>

            </table>
        </div> <br><br>

        <a href="register.html" target="_blank"><button type="submit" class="confirm-btn">Register Family</button></a>

    </section>
<script>

    var famlinks = document.getElementById("famlinks");
    function showMenu(){
        famlinks.style.right = "0px";

    }
    function hideMenu(){
        famlinks.style.left = "-200px";
        
    }


</script>    



</body>

</html>