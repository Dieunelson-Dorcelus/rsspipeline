<?php

require_once "Repository.interface.php";

namespace fr\dieunelson\webservices\rsspipeline;

use fr\dieunelson\Repository;

class Channel implements Repository
{

    public function readAll() : array
    {
        return [];
    }

    public function read(array $filter) : array
    {
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
