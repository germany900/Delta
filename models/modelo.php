<?php
// require_once("../models/modelo.php");
class Service {
    
    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_ejemplo', "root", "");
     /*   $host = 'localhost';
        $db   = 'bprueba';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        try {
             $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }*/
    }   

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios() {

        self::setNames();
        $sql = "SELECT id, nombre, precio FROM servicio";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        //echo $res[0][$nombre];
        //die;
        return $this->servicio;
        $this->db = null;
    }

    public function getServicio($id) {

        self::setNames();
        $sql = "SELECT id, nombre, precio FROM servicio WHERE id=".$id;
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        //echo $res[0][$nombre];
        //die;
        return $this->servicio;
        $this->db = null;
    }
    public function setServicio($nombre, $precio) {

        self::setNames();
        $sql = "INSERT INTO servicio(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setUpdate($id, $nombre=null, $precio=null){
        self::setNames();
        $data = [
                'nombre' => $nombre,
                'precio' => $precio,
                'id' => $id,
            ];
        $sql = "UPDATE servicio SET nombre=:nombre, precio=:precio WHERE id=:id";   
        $result = $this->db->prepare($sql)->execute($data);
        /*$result = $this->db->query($sql);*/



        if ($result) {
            /*return true;*/
            //header ('Location: index');
            echo "<script>window.location='../controllers/controlador.php'</script>";
            return true;
        } else {
            return false;
        }
    }
     public function setDelete($id){
        $data = [
                'id' => $id,
            ];
        self::setNames();
        $sql = "DELETE FROM servicio WHERE id=".$id;   
        /*$result = $this->db->prepare($sql)->execute($data);*/
        $result = $this->db->query($sql);

        if ($result) {
            //header ('Location: index');
            //echo "<script>window.location='../controllers/controlador.php'</script>";
            return true;
        } else {
            return false;
        }
    }
}
?>
