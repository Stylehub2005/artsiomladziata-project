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


        $contact_object = new Contact();
        $contacts = $contact_object->select();

        if ($contacts) {
            foreach ($contacts as $contact) {
                echo "<tr>";
                echo "<td>{$contact->id}</td>";
                echo "<td>{$contact->name}</td>";
                echo "<td>{$contact->email}</td>";
                echo "<td>{$contact->phone}</td>";
                echo "<td>{$contact->message}</td>";
                echo '<td>
                        <form action="delete.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="'.$contact->id.'">
                            <button type="submit" name="delete_contact">Delete</button>
                        </form>
                        <form action="edit.php" method="GET" style="display:inline;">
                            <button type="submit" name="id" value="'.$contact->id.'">Edit</button>
                        </form>
                      </td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No submissions found.</td></tr>";
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




