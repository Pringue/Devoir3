<?php
foreach($regions as $region)
{
    echo "<input type='radio' id='region' value='".$region->idRegion."' onclick='ville($(this).val())'>".$region->nomRegion." ".$region->scoreRegion."<br>";
}
?>