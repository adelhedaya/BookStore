<?php
require_once '../database/db.php'; 
require_once '../pages/book.php';
class Book {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }
    public function getBooks() {
        $query = "SELECT * FROM books";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBookById($id) {
        $query = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
