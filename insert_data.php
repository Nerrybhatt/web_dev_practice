
<!-- CREATE TABLE `user_info`.`information1` (`id` INT NOT NULL , `name` VARCHAR(20) NOT NULL , `address` VARCHAR(25) NOT NULL , `phone` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_info";
$conn=mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die ("database is not connected!" . mysqli_connect_error());
}else {
    echo "connection successfully!";
}

// $sql="CREATE TABLE `information1` (`id` INT NOT NULL , `name` VARCHAR(20) NOT NULL , `address` VARCHAR(25) NOT NULL , `phone` INT NOT NULL , PRIMARY KEY (`id`)) ";
// $result = mysqli_query($conn, $sql);
// if($result){
//     echo "Table creted sucessfully";
// }
// else{
//     echo "error occure while create table" .mysqli_error($conn);

// }
$insert= "INSERT INTO information1 (name, address, phone)
VALUES ('Naresh', 'kathmandu', 215253553);
";
$result2 = mysqli_query($conn, $insert);

if($result2){
        echo "Table creted sucessfully";
    }
    else{
       echo "error occure while create table" .mysqli_error($conn);
    }
?>