<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
 
    if($numero % 2 == 0){
        echo "<h1> é par</h1>";
    }else {
        echo "<h1> é impar </h1>";
    }
   


   
}
?>
