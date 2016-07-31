<?php 
    require_once("vendor/autoload.php");

    use src\Lib\Money as Money;
    $a = new Money(50.5);

    echo $a->getAmount();

    echo "<br/>";
    
    $b = $a->negate();
    echo $b->getAmount();