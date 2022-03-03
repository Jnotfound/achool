<?php
    $name="Janusz";
    echo "Imię i nazwiski: $name <br>";
    echo "Imię i nazwiski: $name <br>";
    //konkatenacja
    echo "Imie: ".$name."<br>";
    //interpolacja
    echo "Imie: ",$name,"<br>";

    //typy danych
    //boolean
    $prawda = true;
    $fałsz = false;
    echo $prawda;
    echo $fałsz;

    //integer

    $dec=10;
    $bin=0b1011;
    $oct=010;
    $hex=0x10;

    echo "<br>$dec";
    echo "<br>$bin";
    echo "<br>$oct";
    echo "<br>$hex<br>";
    echo gettype($hex); //integer
    echo "<br>";
    echo gettype($prawda); //boolean

    //zmiennoprzecinkowe

    $x=10.5;
    echo "<br>";
    echo gettype($x); //double

    $name="Anna";
    echo "<br>Nazwa zmiennej \$name, imię: $name";

    //heredoc
    $surname="Nowak";
    echo <<<ETYKIETA
        <br>
        Imię i nazwisko: $name $surname
        <hr>
ETYKIETA;
?>