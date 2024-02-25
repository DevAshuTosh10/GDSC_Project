<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Appointments";
$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name=$_POST["NAME"];
    $continfo = $_POST["EMAIL ADDRESS"];
    $country= $_POST["Country"];
    $issue= $_POST["ISSUE"];
    
    $sql= "INSERT INTO user(NAME,EMAIL ADDRESS,Country,ISSUE) VALUES('$name',' $continfo','$country','$issue')";
    if($conn->query($sql) == TRUE) {
        echo "Appointment Booking successful.";
    }
    else {
        echo "ERROR:." .$sql. "<br>". $conn->error;
    }
}
$conn->close();
?>