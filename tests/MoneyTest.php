<?php

require __DIR__.'../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function __construct(){

    }

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    // ...
}

