<?php
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];


    // Database connection
    $conn = new mysqli('localhost', 'root', '', '', 'test');
    if($conn->connect_error){
        die('Connection Failed   :  '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into portfolio(firstName, email, project, message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $email, $project, $message);
        $stmt->execute();
        echo "registration Successfully....";
        $stmt->close();
        $conn->close();
    }
?>