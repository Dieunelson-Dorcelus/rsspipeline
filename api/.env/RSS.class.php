<?php

namespace fr\dieunelson\webservices;

class RSS
{
    private $feed;

    public function get($feed = null)
    {
        if(!empty($feed)){
            $this->feed = $feed;
        }
        if(empty($this->feed)) return false;

        return simplexml_load_file($this->feed);
    }
    
}
