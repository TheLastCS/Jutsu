<?php
require 'db_connect2.php';


if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 10]);
    
    $sql = "INSERT INTO users(fname,lname,email,`password`)
                        VALUES ('$firstname','$lastname','$email','$password')";
    if (mysqli_query($mysqli, $sql)) {
        header("location: index2.php");
        }else {
            echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
            }
        mysqli_close($mysqli);
    }

?>
