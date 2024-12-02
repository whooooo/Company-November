<?php
# include Book.php
//include 'Book.php';
include 'PocketBook.php';

//create an instance of the Book class


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book OOP</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
    <br>

    <label for="price">Price: </label>
    <input type="number" name="price" id="price">

    <br>

    <label for="age">Age: </label>
    <input type="number" name="age" id="age">
    
    <br>
    
    <button type="submit" name="btn_submit">Submit</button>
    </form>
    <?php
        # collect the data from the form
        if(isset($_POST['btn_submit'])){
            # assign the data to a variable
            $title=$_POST['title'];
            $price=$_POST['price'];
            $age=$_POST['age'];

            $book=new Book($title,$price);

            # set the values
            $book->setTitle($title);
            $book->setPrice($price);
            $book->setAge($age);

            # display the values using getters
            echo "Title: " . $book->getTitle() . "<br>";
            echo "Price: " . $book->getPrice() . "<br>";
            echo "Age: " . $book->getAge() . "<br>";
        }
    ?>
</body>
</html>