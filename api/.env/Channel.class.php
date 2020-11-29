<?php

namespace fr\dieunelson\webservices\rsspipeline;


require_once "Repository.interface.php";

use fr\dieunelson\Repository;
use PDO;

class Channel implements Repository
{

    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function readAll() : array
    {
        $table = DB_CHANNEL_TABLE;
        $SQL = "SELECT * FROM $table";
        $statement = $this->db->query($SQL);

        if($statement){
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return [];
    }

    public function read(array $filter) : array
    {
        $filterParse = array();

        foreach ($filter as $key => $value) {
            $filterParse[] = "$key = '$value'";
        }

        $table = DB_CHANNEL_TABLE;
        $condition = implode(" AND ", $filterParse);
        $SQL = "SELECT * FROM $table";

        if(!empty($filterParse)){
            $SQL.=" WHERE $condition";
        }

        $statement = $this->db->query($SQL);

        if($statement){
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function create($item)
    {
        $testName = array_key_exists("name", $item);
        $testHook = array_key_exists("hook", $item);

        if(!$testName || !$testHook) return false;

        $date_created = date("Y-m-d H:i:s");

        $table = DB_CHANNEL_TABLE;
        $SQLItem = "'".$item['name']."', '".$item['hook']."', '$date_created'";
        $SQL = "INSERT INTO $table (name, hook, date_created) VALUES ($SQLItem)";

        return $this->db->query($SQL);
    }

    public function update($item)
    {
        die("TODO : à voir plus tard");
    }

    public function delete($item)
    {
        $testName = array_key_exists("name", $item);

        if(!$testName) return false;

        $table = DB_CHANNEL_TABLE;
        $condition = "name = '".$item['name']."'";
        $SQL = "DELETE FROM $table WHERE $condition";

        return $this->db->query($SQL);
    }
    
}
