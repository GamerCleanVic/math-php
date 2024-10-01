<?php

require_once "conjuntos/vazio.php";


$vazio = new Universo();
$vazio->set_item("");
$conjuA = New Universo();
$conjuA->set_item("1", "2", "4");
var_dump($conjuA->get_item());
