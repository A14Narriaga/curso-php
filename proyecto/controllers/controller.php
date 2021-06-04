<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With, Authorization");

class Controller{

    private $method;
    private $data;
    private $params;
    private $dirName = "controllers";

    public function __construct( $name ){
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->data = json_decode( file_get_contents('php://input') );
        $url = $_SERVER['REQUEST_URI'];
        $index = strpos( $url, $this->dirName."/" ) + strlen($this->dirName)+1;
        $myURl = substr( $url, 0, $index ).$name.".php";
        $url = str_replace( $myURl , "", $url );
        if(strlen($url) == 0) $this->params = [];
        else $this->params = explode( "/", substr( $url, 1, strlen($url)) );
    }
    public function getMethod(){
        return $this->method;
    }
    public function getData(){
        return $this->data;
    }
    public function getParams(){
        return $this->params;
    }
}

?>