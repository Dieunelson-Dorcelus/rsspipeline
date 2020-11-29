<?php


require_once ".env/config.php";
require_once ".env/DB.class.php";
require_once ".env/RSS.class.php";
require_once ".env/RSSPipeline.class.php";
require_once ".env/Router.interface.php";
require_once ".env/RSSPipelineRouter.class.php";
require_once ".env/Source.class.php";
require_once ".env/Channel.class.php";
require_once ".env/Article.class.php";

use fr\dieunelson\webservices\DB;
use fr\dieunelson\webservices\RSS;
use fr\dieunelson\webservices\rsspipeline\Source;
use fr\dieunelson\webservices\rsspipeline\Channel;
use fr\dieunelson\webservices\rsspipeline\Article;
use fr\dieunelson\webservices\rsspipeline\RSSPipelineRouter;

$db = new DB();
$instance = $db->get();


$sources = new Source($instance);
/*
$readAll = $source->readAll();
var_dump($readAll);
$read = $source->read(["name"=>"korben"]);
var_dump($read);
$create = $source->create(["name"=>"test", "url"=>"test.test"]);
var_dump($create);
if($create) var_dump($source->delete(["name"=>"test"]));
*/
try {
    $router = new RSSPipelineRouter($sources);
    $router->route(htmlentities($_GET['path']));
} catch (\Throwable $th) {
    //throw $th;
}

/*
$channel = new Channel($instance);


$create = $channel->create(["name"=>"test", "hook"=>"test.test"]);
var_dump($create);
$readAll = $channel->readAll();
var_dump($readAll);
$read = $channel->read(["name"=>"test"]);
var_dump($read);
if($create) var_dump($channel->delete(["name"=>"test"]));



$source = new Source($instance);

$readAll = $source->readAll();
var_dump($readAll);
$read = $source->read(["name"=>"korben"]);
var_dump($read);
$create = $source->create(["name"=>"test", "url"=>"test.test"]);
var_dump($create);
if($create) var_dump($source->delete(["name"=>"test"]));


$rss = new RSS();

$feed = $rss->get($read[0]['url']);

$article = new Article($instance);

print "<h1>".$feed->channel->title."</h1>";
foreach ($feed->channel->item as $i) {
    print "<h2>".$i->title."</h2>";
    print "<p>".$i->description."</p>";
    print "<p>".$i->link."</p>";
    print "<p>".$i->pubDate."</p>";

    $i->status = "droped";
    print "<p>".$i->status."</p>";

    var_dump($article->create(["title" => $i->title, "description" => $i->description, "link" => $i->link, "pubDate" => $i->pubDate, "status" => $i->status]));
}

var_dump($article->readAll());*/