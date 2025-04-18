<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['nota1'];
    $numero2 = $_POST['nota2'];
    $numero3 = $_POST['nota3'];
    $media = ($numero1 + $numero2 + $numero3) / 3;

 
    if($media >= 7){
        echo "<h1> PASSOU DE ANO</h1>";
    }else {
        echo "<h1> REPROVADO</h1>";
    }
   


   
}
?>