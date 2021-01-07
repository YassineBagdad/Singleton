<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 21/12/2016
 * Time: 17:44
 */
class singleton
{
    private $nom;
    private $prenom;
    private $id;


    private static $_instance = null;

    private function __construct() {
        $this->nom="radi";
        $this->prenom="alae";
        $this->id=uniqid();
    }

    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @param void
     * @return Singleton
     */
    private function __clone(){

    }
    public static function getInstance() {

        if(is_null(self::$_instance)) {
            self::$_instance = new Singleton();
        }

        return self::$_instance;
    }

}
