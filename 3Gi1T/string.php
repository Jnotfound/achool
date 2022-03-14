<?php
  $text = <<<SCHOOL
    ZSŁ - Zespół
    Szkół Łączności<br>

SCHOOL;

echo "$text<br>";
echo nl2br($text);

$name="jANusZ";
echo "$name<br>";
echo strtolower ($name);
echo "<br>";
echo strtoupper ($name);
echo "<br>";

$surname="Gwóźdź";
echo "$surname<br>";
echo mb_strtolower ($surname);
echo "<br>";
echo mb_strtoupper ($surname);

$text="jaNUsz koWAlski";
echo "<hr>$text<br>";
echo mb_strtolower ($text)."<br>";
echo ucfirst(mb_strtolower ($text))."<br>";
echo ucwords(mb_strtolower ($text))."<br>";
?>
