<?php
#define a class
class Book{
    /**INSIDE THE CLASS */
    #Properties(variables)
    private $title;
    private $price = 150;
    private $author;
    private $publisher;
    protected $year_published;
    private $age;
    

    #public and var properties are the same
    public $pages;
    var $isbn;

    public function __construct($title,$price)
    {
        $this->title=$title;
        $this->price=$price;
    }

    #Methods(functions)
    public function showTitle()
    {
        echo $this->title;
    }

    #still a public method
    function showPrice()
    {
        echo $this->price;
    }
    private function addDiscountPrice()
    {
        # this will 20% discount if the age > 60
        if($this->age > 60){
            $price=$this->price *0.8;
            return $price;
        } else {
            //return $this->price;だとpriceが空欄になりエラーとなるので下記に書き直した
            $price=$this->price;
            return $price;
        }
        
    }
    
    //setters
    public function setTitle($title)
    {
        $this->title=$title;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function setAuthor($author)
    {
        $this->author=$author;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    //getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->addDiscountPrice();
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAge()
    {
        return $this->age;
    }

}
    //  /**OUTSIDE THE CLASS */

    // $language=new Book("English",80);

    // echo "Title: ".$language->getTitle()."<br>";
    // echo "Price: ".$language->getPrice()."<br>";

//     //instantiate our class
// $math=new Book;
// $science=new Book;

// //we set the values of title, price, author for $math and $science
// # set math
// $math->setTitle('Geometry');
// $math->setPrice(200);
// $math->setAuthor('Rene Descartes');

// # set science
// $science->setTitle('Time');
// $science->setPrice(250);
// $science->setAuthor('Albert Einstein');

// # get math
// echo "<h3>Math Object</h3>";
// echo "<br>";
// echo $math->getTitle() . "<br>";
// echo $math->getPrice() . "<br>";
// echo $math->getAuthor() . "<br>";

// echo "<hr>";

// # get science
// echo "<h3>Science Object</h3>";
// echo "<br>";
// echo $science->getTitle() . "<br>";
// echo $science->getPrice() . "<br>";
// echo $science->getAuthor() . "<br>";

?>