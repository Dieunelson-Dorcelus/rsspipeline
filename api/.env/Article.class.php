<?php

namespace fr\dieunelson\webservices\rsspipeline;


require_once "Repository.interface.php";

use fr\dieunelson\Repository;
use PDO;

class Article implements Repository
{

    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function readAll() : array
    {
        $table = DB_ARICLE_TABLE;
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

        $table = DB_ARICLE_TABLE;
        $condition = implode(" AND ", $filterParse);
        $SQL = "SELECT * FROM $table";

        if(!empty($filterParse)){
            $SQL.=" WHERE $condition";
        }

        $statement = $this->db->query($SQL);

        if($statement){
            return $statement->fetchAll();
        }

        return [];
    }

    public function create($item)
    {
        $testTitle = array_key_exists("title", $item);
        $testDescription = array_key_exists("description", $item);
        $testLink = array_key_exists("link", $item);
        $testPubDate = array_key_exists("pubDate", $item);
        $testStatus = array_key_exists("status", $item);

        if(!$testTitle || !$testDescription || !$testDescription || !$testLink || !$testPubDate || !$testStatus) return false;
        var_dump($item['status']);
        if(!in_array($item['status'],["grabed", "droped", "published"])) return false;

        $date_created = date("Y-m-d H:i:s");

        $table = DB_ARICLE_TABLE;
        $SQLItem = "'".$item['title']."', '".$item['description']."', '".$item['link']."', '".$item['pubDate']."', '".$item['status']."', '$date_created'";
        $SQL = "INSERT INTO $table (title, description, link, pubDate, status, date_created) VALUES ($SQLItem) ON DUPLICATE KEY UPDATE status = '".$item['status']."'";

        return $this->db->query($SQL);
    }

    public function update($item)
    {
        die("TODO : à voir plus tard");
    }

    public function delete($item)
    {
        $testName = array_key_exists("link", $item);

        if(!$testName) return false;

        $table = DB_ARICLE_TABLE;
        $condition = "link = '".$item['link']."'";
        $SQL = "DELETE FROM $table WHERE $condition";

        return $this->db->query($SQL);
    }
    
}
