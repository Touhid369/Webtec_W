<?php

class Book {
    private $title;
    private $author;
    private $year;
    
    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    
    public function getDetails() {
        return "Title: {$this->title}<br>Author: {$this->author}<br>Publication Year: {$this->year}";
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setAuthor($author) {
        $this->author = $author;
    }
    
    public function setYear($year) {
        $this->year = $year;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function getYear() {
        return $this->year;
    }
}

echo "<h2>Book Object Example</h2>";

$book1 = new Book("1984", "George Orwell", 1949);

echo "<h3>Initial Book Details:</h3>";
echo $book1->getDetails();

echo "<br><br><h3>After Updating Properties:</h3>";
$book1->setTitle("Animal Farm");
$book1->setAuthor("George Orwell");
$book1->setYear(1945);

echo $book1->getDetails();

echo "<br><br><h3>Another Book Example:</h3>";
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
echo $book2->getDetails();

?>