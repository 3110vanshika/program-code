<html>

<body>

<?php
        if (empty($_POST["fname"]))
        {
            throw new Exception ('First Name is required');
        }
        if (empty($_POST["lname"])) 
        {
            throw new Exception ('Last Name is required');
        }

include "connection.php";  
$date = date('Y-m-d H:i:s');
$sql="INSERT INTO tbl_users (first_name, last_name) VALUES ('$_POST[fname]','$_POST[lname]')";

 

if (!mysqli_query($mysqli, $sql))

  {

  die('Error: ' . mysqli_error($mysqli));

  }

echo "1 record added";


mysqli_close($mysqli);


?>

</body>

</html>