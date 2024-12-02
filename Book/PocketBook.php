<?php

include 'Book.php';

class PocketBook extends Book{

}

$pocket_book=new PocketBook("Harry Potter",30);

echo "Title: " . $pocket_book->getTitle() . "<br>";
echo "Price: " . $pocket_book->getPrice() . "<br>";
?>