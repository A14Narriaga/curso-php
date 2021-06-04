<?php 

require('./controller.php');

class CuestionarioController extends Controller {

    public function __construct() {
        parent::__construct('cuestionario');
        $params = $this->getParams();
        if(count($params) > 0) {
            $nameFunction = $params[0];
            $this->$nameFunction();
        }
        else {
            switch($this->getMethod()) {
                case 'POST': $this->create(); break;
                case 'GET': $this->read(); break;
                case 'PUT': $this->update(); break;
                case 'DELETE': $this->delete(); break;
            }
        }
    }
    public function create() {
        print_r("Create");
    }
    public function read() {
        print_r("Read");
    }
    public function update() {
        print_r("Update");
    }
    public function delete() {
        print_r("Delete");
    }
    public function search() {
        print_r("Search");
    }
}

$cuestionario = new CuestionarioController();

?>