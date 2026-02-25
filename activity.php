<?php

class Book {
    public $title;
    public $author;
    public $year;
    public $isAvailable;

    public function isAvailable() {
        return $this->isAvailable;
    }

    function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function getSummary() {
        return "$this->title was written by $this->author in $this->year.";
    }

    public function borrowBook () {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return "You have borrowed '$this->title'.";
        } else {
            return "Sorry, '$this->title' is currently unavailable.";
        }
    }

    public function returnBook() {
        $this->isAvailable = true;
        return "You have returned '$this->title'.";
    }

    public function displayBookInfo() {
        $availability = $this->isAvailable ? "Available" : "Unavailable";
        return "Title: $this->title, Author: $this->author, Year: $this->year, Status: $availability";
    }

    $book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
    $book1->isAvailable = true;
    $book2 = new Book("Frankenstein", "Mary Shelley", 1818);
    $book2->isAvailable = true;
    $book3 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
    $book3->isAvailable = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11</title>
</head>
<body>
    
</body>
</html>

