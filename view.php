<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Submissions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/view.css">
</head>
<body>
<?php include 'parts/header.php'?>

<div class="container">
    <h1>View Submissions</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
         include_once('db.php');
        if (isset($conn)) {
            $stmt = $conn->prepare("SELECT * FROM submissions");
            $stmt->execute();
            $submissions = $stmt->fetchAll();

            foreach ($submissions as $submission) {
                echo "<tr>";
                echo "<td>{$submission['id']}</td>";
                echo "<td>{$submission['name']}</td>";
                echo "<td>{$submission['email']}</td>";
                echo "<td>{$submission['phone']}</td>";
                echo "<td>{$submission['message']}</td>";
                echo "<td>
                                <a href='edit.php?id={$submission['id']}'>Edit</a>
                                <a href='delete.php?id={$submission['id']}'>Delete</a>
                              </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Database connection failed.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<?php include 'parts/footer.php'?>
<script src="js/skript.js"></script>
<script src="js/menu.js"></script>
</body>
</html>



