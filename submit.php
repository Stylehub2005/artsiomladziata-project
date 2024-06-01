<!-- submit.php -->
<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['text'];

    $stmt = $conn->prepare("INSERT INTO submissions (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    header("Location: thankyou.php");
}
?>


