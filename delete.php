<?php
include('parts/header.php');


$contact_object = new Contact();

if (isset($_POST['delete_contact'])) {
    $id = $_POST['id'];
    $contact_object->delete($id);

    header("Location: view.php");
    exit;
}
?>

