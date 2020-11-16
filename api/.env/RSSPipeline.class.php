<?php

namespace fr\dieunelson\webservices\rsspipeline;

use PDO;

class RSSPipeline
{
    private $articles;
    private $sources;
    private $channels;

    public function __construct(PDO $pdo)
    {
        $this->articles = new Article($pdo);
        $this->sources = new Source($pdo);
        $this->channels = new Channel($pdo);
    }

    public function createSource()
    {
        # code...
    }

    public function getSource()
    {
        # code...
    }

    public function deleteSource()
    {
        # code...
    }

    public function createChannel()
    {
        # code...
    }

    public function getChannel()
    {
        # code...
    }

    public function deleteChannel()
    {
        # code...
    }

    public function grabArticle()
    {
        # code...
    }

    public function dropArticle()
    {
        # code...
    }

    public function publishArticle()
    {
        # code...
    }

    public function getArticle()
    {
        # code...
    }

    public function deleteArticle()
    {
        # code...
    }

}
