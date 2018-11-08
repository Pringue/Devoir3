<?php
$i = 0;
foreach($villes as $ville)
{
    $i = $i + 1;
    echo "<input type='radio' >".$ville->nomVille." ".$ville->scoreVille."<br>";
}
echo "<input type='button' value='+ 5 points' onclick='ajouterScore($i)'>";
echo "<input type='hidden' value='".$region."' id='regionS'>"
?>