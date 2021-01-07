<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 21/12/2016
 * Time: 17:46
 */
require(dirname(__FILE__).'/singleton.php');

// Tentative d'instanciation de la classe
$SingletonA = Singleton::getInstance();
$SingletonB = Singleton::getInstance();

var_dump($SingletonA);
var_dump($SingletonB);
$SingletonC = clone $SingletonB;
var_dump($SingletonC);

