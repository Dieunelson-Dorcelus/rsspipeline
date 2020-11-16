<?php

namespace fr\dieunelson\webservices;

use PDO;

class DB{

    private $pdo;

    public function get($host=null, $port=null, $name=null, $user=null, $pass=null) : \PDO
    {
        if(!$this->pdo){
            try {
                if($host && $port && $name && $user && $pass){
                    $this->pdo = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$name,
                    $user,
                    $pass) or die;
                }else{
                    $this->pdo = new PDO('mysql:host='.AUTH_DB_HOST.';port='.AUTH_DB_PORT.';dbname='.AUTH_DB_NAME,
                    AUTH_DB_USER,
                    AUTH_DB_PASS);
                }
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        }

        return $this->pdo;

    }
}