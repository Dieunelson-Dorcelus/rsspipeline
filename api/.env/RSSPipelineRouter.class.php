<?php

namespace fr\dieunelson\webservices\rsspipeline;

use fr\dieunelson\Repository;
use fr\dieunelson\Router;

class RSSPipelineRouter implements Router
{

    private $sources;

    public function __construct(Repository $sources)
    {
        $this->sources = $sources;
    }


    public function route(string $page)
    {

        header("Content-Type: application/json");

        if(!empty($page)){
            $page_arr = explode("/", $page);
        }else{
            $page_arr = [$page];
        }

        $response = [];

        switch ($page_arr[0]) {

            # /Source
            case 'Source':

                
                switch ($page_arr[1]) {

                    # /Source/read/:name
                    case 'read':
                        $name = $page_arr[2];
                        $response["result"] = $this->sources->read(['name'=>$name]);
                        break;
                    
                    default:
                        # code...
                        break;
                }

                break;
            
            default:
                $response["errors"][] = "NO CONTRONTROLLER !";
                break;
        }

        print json_encode($response);
    }
}
