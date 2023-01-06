<?php

include __DIR__ . "/../data/bookDAO.php";

class Book {

    // ========================= FIELDS =========================

    private $id;
    private $title;
    private $genre;
    private $stock;
    private $price;
    private $is_children;
    private $is_fiction;
    private $is_self_help;
    private $image;

    private $add_date;
    


    public function __construct($id){

        // Call to DAO
        $book = BookDAO::fetchBook($id);

        if ($book) {
            $this->id = $book['id'];
        }
        ;
        if ($book) {
            $this->title = $book['title'];
        }
        ;
        if ($book) {
            $this->genre = $book['genre'];
        }
        ;
        if ($book) {
            $this->is_children = $book['is_children'];
        }
        ;
        if ($book) {
            $this->is_fiction = $book['is_fiction'];
        }
        ;
        if ($book) {
            $this->is_self_help = $book['is_self_help'];
        }
        ;
        if ($book) {
            $this->stock = $book['stock'];
        }
        ;
        if ($book) {
            $this->price = $book['price'];
        }
        ;
        if ($book) {
            $this->image = $book['image'];
        }
        ;
    }

    // ========================= METHODS =========================

    public static function getAllBooks() {
        return BookDAO::fetchAllBooks();
    }

    public static function filter() {

        $book = BookDAO::fetchAllBooks();
        $filteredBooks = [];

        foreach ($book as $id) {
            $book = new Book($id['id']);

            if (isset($_POST['Children'])) {
                if ($book->getIs_children() == true) {
                    array_push($filteredBooks, $id);
                }

            } elseif (isset($_POST['Self_Help'])) {
                if ($book->getIs_self_help() == true) {
                    array_push($filteredBooks, $id);
                }

            } elseif (isset($_POST['Fiction'])) {
                if ($book->getIs_fiction() == true) {
                    array_push($filteredBooks, $id);
            }

            } else {
                return [];
            }   
        }
        return $filteredBooks;

    }

    public static function displayFeatured() {
        return BookDAO::featuredBooks();
    }

    // public static function displayLatest() {
    //     return BookDAO::latestAdditions();
    // }


    // ==================== GETTERS & SETTERS ====================

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;

        return $this;
    }

    public function getIs_children() {
        return $this->is_children;
    }

    public function setIs_pc($is_children) {
        $this->is_children = $is_children;

        return $this;
    }

    public function getIs_fiction() {
        return $this->is_fiction;
    }

    public function setIs_fiction($is_fiction) {
        $this->is_fiction = $is_fiction;

        return $this;
    }

    public function getIs_self_help() {
        return $this->is_self_help;
    }

    public function setIs_self_help($is_self_help) {
        $this->is_self_help = $is_self_help;

        return $this;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setStock($stock) {
        $this->stock = $stock;

        return $this;
    }
 
    public function getAdd_date() {
        return $this->add_date;
    }

    public function setAdd_date($add_date) {
        $this->add_date = $add_date;

        return $this;
    }
    
}


