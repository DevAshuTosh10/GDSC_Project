<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Consultations";
$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST["Name"];
    $continfo= $_POST["Email Address"];
    $country= $_POST["Country"];
    $issue= $_POST["Issue"];
   
    $sql= "INSERT INTO user(Name,Email Address,Country,Issue) VALUES('$name',' $continfo','$country','$issue')";
    if($conn->query($sql) == TRUE) {
        echo "Booking for Consultation Successful";
    }
    else {
        echo "ERROR:." .$sql. "<br>". $conn->error;
    }
}
$conn->close();
?>