<?php

class Book
{
    //===============================fields=====================================//
    private $id;
    private $title;
    private $genre;
    private $price;
    private $filepath;
    private $available = 1;

    public function __construct($title, $genre, $price, $filepath)
    {

        $this->title = $title;
        $this->genre = $genre;
        $this->price = $price;
        $this->filepath = $filepath;
    }

    //===================================methods====================================

    public static function createBookFromDb($row) {

        $book = new Book($row->title, $row->genre, $row->price, $row->filepath);
        $book->setId($row->id);
        $book->setAvailable($row->available);

        return $book;
    }

    public function sellBook()
    {
        if ($this->available) {

            $this->available = 0;
            return true;

        } else {
            return false;
        }
    }

     // multiplies price property of instance and returns full price of the book
     public function calcFullPrice() {
        return $this->price * 1;
    }

    public function displayAvailibility() {
        if ( $this->available == 1 ) {
            return "<li style='color:green;'>In Stock</li>";
        }else if ( $this->available == 0) {
            return "<li style='color:red;'Out of Stock</li>";
        }
    }

    //==================================Getters and Setters ===============================

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }


    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }


    public function getFilepath()
    {
        return $this->filepath;
    }
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }


    /**
     * Get the value of price
     * 
     * @return self
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

   
    /**
     * Get the value of available
     */ 
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */ 
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

      /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


     /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    function addToTotal() {
    
        $_SESSION['selectedItemValue'] = $this->getPrice();
        $selectedBook = $_SESSION['selectedBook'];
        
    }

   }


