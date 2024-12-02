<?php
include 'Fare.php';

$fare=new Fare;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare</title>
</head>
<body>
    <form action="" method="post">
    <label for="km">km: </label>
    <input type="number" name="km" id="km">
    <br>
    <label for="age">Age: </label>
    <input type="number" name="age" id="age">
    <br>
    <!-- <label for="fare">Fare: </label>
    <input type="number" name="fare" id="fare">
    <br> -->
    <button type=Submit name=btn_submit>Submit</button>
    </form>
    <?php
    # collect the data from the form
    if(isset($_POST['btn_submit'])){
        # assign the data to a variable
        $km=$_POST['km'];
        $age=$_POST['age'];
        

        # set the values
        $fare->setKm($km);
        $fare->setAge($age);
        

        # display the values using getters
        
        echo "km: " . $fare->getKm() . "<br>";
        echo "Age: " . $fare->getAge() . "<br>";
        echo "Fare: " . $fare->getFare() . "<br>";
    }
    
    
    ?>
</body>
</html>