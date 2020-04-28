<?php

include 'dbcon.php';


  if(isset($_POST['submit'])){

	$username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST{'coronasym'];
    $msg = $_POST['msg'];

echo $username;
echo $email;
echo $mobile;
echo $symp;

  $sql = "INSERT INTO MyGuests (username, email, mobile,coronasym, msg)
VALUES ($username,$email',$mobile,$symp,$msg)";
print_r($sql);
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

    


}



?>