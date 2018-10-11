<?php date_default_timezone_set('UTC'); 
require_once("../models/modelo.php");
    // $servicio = array();
    // $db = new PDO('mysql:host=localhost;dbname=bprueba', 'root', '');
    // $sql = $db->query('SELECT * FROM servicio WHERE id = ' . $_GET['id']);
    // $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    if(isset($_GET['id'])){
        $nuevo = new Service();
        $results = $nuevo->getServicio($_GET['id']);

    }
?>

<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '')) {
    $nuevo = new Service();
    $asd = $nuevo->setUpdate($_GET['id'], $_POST['nombre'], $_POST['precio'] );
    //header ('Location: ../controllers/controlador.php');
}
?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <?php 
    if (isset($_GET['id'])){

    
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <form action="#" method="post" class="col-lg-5">
                        <h3>Actualizar Servicio</h3>                
                        Nombre: <input type="text" value="<?php echo $results[0]['nombre']; ?>" name="nombre" class="form-control"/>
                        Precio: <input type="text" value="<?php echo $results[0]['precio']; ?>"  name="precio" class="form-control"/>    
                        <br/>
                        <input type="submit" value="Update" href="../controllers/controlador.php" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <?php } ?>
</html>