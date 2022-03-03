<?php
    echo PHP_VERSION,"<br>" ; //7.1.13
    echo 2**10,"<br>" ; //1024

    $x=10;
    $y=10;
    
    echo $x<=>$y,"<br>" ;

    $x=1;
    $y=1.0;

    echo gettype($x),"<br>";
    echo gettype($y),"<br>";

    if($x==$y){
        echo "Równe<br>";
    }else{
        echo "Różne<br>";
    }

    //identyczne
    if($x===$y){
        echo "Identyczne<br>";
    }else{
        echo "Nieidentyczne<br>";
    }

    /* 
        preinkrementacja ++$i
        postinkrementacja $i++
        predekrementacja --$i
        postdekrementacja $i--
    */

    $x=1;
    echo $x; //x=1
    $x=$x++;
    echo $x; //x=1
    $x=++$x;
    echo $x; //x=2
    $y=++$x;
    echo $x; //x=3
    echo $y; //y=3
    $y=$x++;
    echo $x; //x=4
    echo $y  //y=3

?>