<?php date_default_timezone_set('UTC'); ?>

<?php 

if ((isset($_POST['id']))) {
$nuevo = new Service();
$id=$_POST['id'];
$asd= $nuevo->setDelete($_POST['id']);

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <header class="text-center">
                <h1>Ejemplo MVC con PHP</h1>
                <hr/>
                <p class="lead">Ejemplo de aplicación utilizando el paradigma MVC</p>
            </header>
            <div class="col-lg-6 col-md-offset-3 text-center">
                <hr/>
                <h3>Listado de servicios</h3>
                <table class="table table-striped">
                    <tr>
                        
                        <td><strong>SERVICIO</strong></td>
                        <td><strong>PRECIO</strong></td>
                        <td><strong>Eliminar</strong></td>
                        <td><strong>Modificar</strong></td>
                        
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>

                        <tr>     
                            </td> 
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td>$ <?php echo $datos[$i]["precio"]; ?></td>
                            <td>
                            <form method="post">
                            <input type="hidden" name="id" class="form-control" 
                            value="<?php echo $datos[$i]['id']; ?>"/>
                            <!--<input type="submit" value="borrar" class="btn"/>-->
                            <input type="button" value="Eliminar" class="btn btn-info" data-toggle="modal" data-target="#avisoBorrar<?= $datos[$i]["id"]; ?>"/>
                            <div class="modal fade" id="avisoBorrar<?= $datos[$i]["id"]; ?>" role="dialog">
                            <div class="modal-dialog modal-sm">
                              <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>Seguro que desea borra este articulo? <?= $datos[$i]["nombre"]  ?></p>
                                    </div>
                                <div class="modal-footer">
                                    <input type="submit" id="<?= $datos[$i]["id"]; ?>" value="borrar" class="btn"/>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                 </div>
                                </div>
                                 </div>
                                 </div>
                            </form>
                        </td>
                            <td><a href="../views/update.php?id=<?php echo $datos[$i]["id"]; ?>"><input type="button" value="Modificar" class="btn btn-info"></a>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                Vigux.com.mx - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>







</html>

