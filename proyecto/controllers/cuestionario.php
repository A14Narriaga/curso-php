<?php 

require('./controller.php');
require('../database/database.php');

class CuestionarioController extends Controller {

    private $db;

    public function __construct() {
        parent::__construct('cuestionario');
        $this->db = new database();
        $this->db->getConnection();
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
        $data = $this->getData();
        $sql = "INSERT INTO cuestionario(nombre, clave) VALUE('$data->nombre','$data->clave')";
        $this->db->create($sql) ? 
        print_r("Cuestionario creado !!") : 
        print_r("Error al crear el cuestionario !!");
    }

    public function read() {
        $sql = "SELECT * FROM cuestionario";
        $result = $this->db->read($sql);
        print_r(json_encode($result));
    }

    public function update() {
        $data = $this->getData();
        $sql = "UPDATE cuestionario SET nombre = '$data->nombre' WHERE clave = '$data->clave'";
        $this->db->update($sql) ? 
        print_r("Cuestionario actualizado !!") :
        print_r("Error al actualizar el cuestionario !!");
    }

    public function delete() {
        $data = $this->getData();
        $sql = "DELETE FROM cuestionario WHERE clave = '$data->clave'";
        $this->db->delete($sql) ? 
        print_r("Cuestionario eliminado !!") : 
        print_r("Error al eliminar el cuestionario !!");
    }

    public function search() {
        $data = $this->getData();
        $sql = "SELECT * FROM cuestionario WHERE clave = '$data->clave'";
        $result = $this->db->read($sql);
        print_r(json_encode($result));
    }
}

$cuestionario = new CuestionarioController();

?>