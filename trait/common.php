<?php

require "bank.php";

class Bar
{
    use Bank;
}

$object = new Bar;

$object->abc();
$object->efg();

?>