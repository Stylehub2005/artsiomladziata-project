<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM submissions WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $submission = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['text'];

    $stmt = $conn->prepare("UPDATE submissions SET name = :name, email = :email, phone = :phone, message = :message WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);
    $stmt->execute();

    header("Location: view.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Edit Submission</h1>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($submission['id']); ?>">
    <p><input type="text" name="name" class="feedback-input" placeholder="Name" value="<?php echo htmlspecialchars($submission['name']); ?>" required></p>
    <p><input type="email" name="email" class="feedback-input" placeholder="Email" value="<?php echo htmlspecialchars($submission['email']); ?>" required></p>
    <p><input type="tel" class="feedback-input" name="phone" placeholder="Phone" value="<?php echo htmlspecialchars($submission['phone']); ?>" required></p>
    <p><textarea name="text" id="comment" class="feedback-input" placeholder="Message" required><?php echo htmlspecialchars($submission['message']); ?></textarea></p>
    <input type="submit" value="Update" class="button-submit">
</form>
</body>
</html>


