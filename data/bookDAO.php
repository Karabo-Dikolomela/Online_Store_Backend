<?php

include __DIR__ . "/databaseConfig.php";

class BookDAO {

    // ========================= DB CRUD METHODS =========================


    public static function fetchBook($id) {
        global $connect;

        // Begin prepare statement
        $sql = "SELECT * FROM book WHERE id =?";
        $stmt = $connect->prepare($sql);

        // Bind passed variable to prepare statement
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $book = $result->fetch_assoc();
        return $book;
    }

    public static function fetchAllBooks() {
        global $connect;

        $sql = "SELECT id FROM book";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $book = $result->fetch_all(MYSQLI_ASSOC);
        return $book;
    }

    public static function featuredBooks() {
        global $connect;

        $sql = "SELECT id FROM book ORDER BY RAND() LIMIT 2";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $featBook = $result->fetch_all(MYSQLI_ASSOC);
        return $featBook;
    }

}