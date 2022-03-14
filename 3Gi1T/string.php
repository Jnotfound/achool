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
echo ucwords(mb_strtolower ($text))."<br><hr>";

$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";
echo $lorem."<hr>";
echo wordwrap($lorem, 30, "<br>");
echo wordwrap($lorem, 30, "<hr>");
ob_clean();

$name ="  Jan  ";
echo "Długość imienia $name wynosi:".strlen($name)."<br>";
echo "Długość imienia ".ltrim($name)." wynosi:".strlen(ltrim($name))."<br>";
echo "Długość imienia ".rtrim($name)." wynosi:".strlen(rtrim($name))."<br>";
echo "Długość imienia ".trim($name)." wynosi:".strlen(trim($name))."<br>";


?>
