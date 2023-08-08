<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $message =($_POST["message"]);

    $conn = new mysqli('localhost','root','root','contact');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
else{
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$name, $email, $message);
    $stmt->execute();
    echo "Thank you for contacting us! We will get back to you shortly.";
    $stmt->close();
    $conn->close();
    }
}    
?>

