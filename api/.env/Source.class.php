<?php

require_once "Repository.interface.php";

namespace fr\dieunelson\webservices\rsspipeline;

use fr\dieunelson\Repository;
use PDO;

class Source implements Repository
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function readAll() : array
    {
        $table = DB_SOURCE_TABLE;
        $SQL = "SELECT * FROM $table";
        $statement = $this->db->query($SQL);

        if($statement){
            return $statement->fetchAll();
        }
        
        return [];
    }

    public function read(array $filter) : array
    {
        $filterParse = array();

        foreach ($filter as $key => $value) {
            $filterParse[] = "$key = '$value'";
        }

        $table = DB_SOURCE_TABLE;
        $condition = implode(" AND ", $filterParse);
        $SQL = "SELECT * FROM $table WHERE $condition";
        $statement = $this->db->query($SQL);

        if($statement){
            return $statement->fetchAll();
        }

        return [];
    }

    public function create($item)
    {

    }

    public function update($item)
    {

    }

    public function delete($item)
    {

    }
    
}
