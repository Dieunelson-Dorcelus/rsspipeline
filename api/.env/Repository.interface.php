<?php

namespace fr\dieunelson;

interface Repository {    
    
    public function readAll() : array;
    public function read(array $filter) : array;
    public function create($item);
    public function update($item);
    public function delete($item);
    
}