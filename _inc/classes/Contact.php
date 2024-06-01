<?php
class Contact extends Database {
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->connection;
    }

    function insert() {
        if ($this->db) {
            if (isset($_POST['contact_submitted'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['text'];

                $stmt = $this->db->prepare("INSERT INTO submissions (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':message', $message);
                $stmt->execute();
            }
        }
    }

    function select() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM submissions");
            $stmt->execute();
            $submissions = $stmt->fetchAll();
            return $submissions;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function delete($id) {
        try {
            $stmt = $this->db->prepare("DELETE FROM submissions WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function get($id) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM submissions WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function update($id, $name, $email, $phone, $message) {
        try {
            $stmt = $this->db->prepare("UPDATE submissions SET name = :name, email = :email, phone = :phone, message = :message WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindParam(':message', $message, PDO::PARAM_STR);
            $stmt->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
