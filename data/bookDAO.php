<?php

require_once __DIR__ . "/../config/DatabaseConfig.php";
require_once __DIR__ . "/../model/book.php";

class BookDAO {

    // ======= Fields =======

    private DatabaseConfig $databaseConfig;
    private $tableName = "book";

    // ===== Constructor =====

    public function __construct($databaseConfig) {
        
        $this->databaseConfig = $databaseConfig;
    }

    // ===== Methods ====

    // =================================== create new book ===================================
    public function create(Book $book) {

        $conn = $this->databaseConfig->connect();

        $statement = "INSERT INTO book (title, genre, price, filepath, available) Values(
            '". $book->getTitle() ."', 
            '". $book->getGenre() ."', 
            '". $book->getPrice() ."', 
            '". $book->getFilepath() ."', 
            '". $book->getAvailable() ."'
        )";

        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result;
   
        } else {

            die("Query failed: " . $conn->error); //die function to close connection in case of error
            $conn->close();

        }
    }
    

    // =================================== Read all book from database ===================================
    public function readAll() {

        $conn = $this->databaseConfig->connect();

        $bookData = [];

        $statement = "SELECT * FROM book";

        if ($result = $conn->query($statement)) {

            while ($row = $result->fetch_object()) {

                $bookObject = Book::createBookFromDb($row);

                array_push($bookData, $bookObject);
            }

            $conn->close();
            return $bookData;

        } else {

            die($conn->error . "<br><br>"); //die function to close connection in case of error
            $conn->close(); // close connection
            
        }

    }


    // =================================== laod book by id ===================================
    public function readById($id) {

        $conn = $this->databaseConfig->connect();

        $statement = "SELECT * FROM book WHERE id='$id'";

        if ($result = $conn->query($statement)) {

            $row = $result->fetch_object();

            if ($row !== null) {
                
                $book = Book::createBookFromDb($row);
                $conn->close();
                return $book;
            }

        } else {

            $conn->close();
            die("Connection failed: " . $conn->error); //die function to close connection in case of error
        }
    }

    // =================================== update whole book ===================================
    public function update(Book $book) {

        $conn = $this->databaseConfig->connect();

        $statement = "UPDATE book
                      SET title = '".$book->getTitle()."',
                          genre = '".$book->getGenre()."',
                          price = '".$book->getPrice()."',
                          filepath = '".$book->getFilepath()."',
                          available = '".$book->getAvailable()."'
                      WHERE id='".$book->getId()."'
        ";

        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result;

        } else {

            die($conn->error); //die function to close connection in case of error
            $conn->close();
         
        }
    }

    // =================================== sets available column to 0 ===================================
    public function updateSellBook(Book $book) {
        
        $conn = $this->databaseConfig->connect();

        $statement = "UPDATE book SET available = '0' WHERE id='".$book->getId()."'
        ";

        if ($result = $conn->query($statement)) {

            $conn->close();
            return $result;

        } else {

            die($conn->error); //die function to close connection in case of error
            $conn->close();
         
        }
    }

    // =================================== deletes a book by id ===================================    
    public function deleteById(){

    }

}

