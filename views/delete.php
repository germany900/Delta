<?php date_default_timezone_set('UTC'); ?>
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

        <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3>Cabecera de la ventana</h3>
             </div>
                 <div class="modal-body">
                    <h4><?= print_r();/*$_POST["id"]*/  ?></h4>
                    Mas texto en la ventana.    
             </div>
                 <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-info">Cerrar</a>
             </div>
              </div>
           </div>
        </div>


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
                        <td><strong>OPCIONES</strong></td>
                        <td><strong>SERVICIO</strong></td>
                        <td><strong>PRECIO</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                        <tr>
                            <td><a href="../controllers/controlador.php?id=<?php echo $datos[$i]["id"]; ?>">Update</a>
                                <br>

                                <a href="delete.php?=<?php echo $datos[$i]["id"]; ?>" data-toggle="modal">Delete
                                <!-- <script>
                                var reply=confirm("¿Seguro que desea borrar?")
                                if (reply==true) 
                                    {
                                    //AQUI DEBERIA SALIR Y VOLVER AL INDEX, ES DECIR EJECUTAR EL CODIGO DE LOGOUT.PHP
                                    }
                                    else 
                                    {
                                    //AQUI NO HARIA NADA, SE CERRARIA EL POPUP Y SEGUIRIA EN LA PAGINA ACTUAL
                                    }
                                    </script> --></a>
                                
                            </td> 
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td>$ <?php echo $datos[$i]["precio"]; ?></td>
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
<!-- <script>
   $(document).ready(function()
   {
      $("#mostrarmodal").modal("show");
   });
</script> -->
