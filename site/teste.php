<?php

    $nome = "WeSlEy";

    $nome = strtolower($nome);

    if($nome == 'wesley' ){
        echo "show";
    }
    else{
        echo "você não foi show";
    }
    for($x=1;$x<=10;$x++){
        if($x % 2 == 0){
        echo $x . "<br>";
        }
        else{
        echo "IMPAR <br>";
        }
    }
        echo "<hr>";

        $a = 1;
        while($a<=10){
            echo $a . "<br>";
            $a = $a + 1;
        }
?>