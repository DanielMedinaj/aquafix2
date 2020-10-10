<?php
header('Content-Type: text/html; charset=ISO-8859-1');

?>
<?php
    session_start();

    $usuario=isset($_SESSION['loggedin']);
    if($usuario == false){
      echo '<script>location.href="/Daniel/login.php"</script>';
    }
    else {

    }
   
?>
<!DOCTYPE html>

<html lang="en">



<head>

    

<meta http-equiv="Content-Type content=text/html; charset=ISO-8859-1" />
    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>AQUAFIX</title>



    <!-- Bootstrap core CSS -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.min.css" rel="stylesheet">



    <link href="/Daniel/componentes/css/bootstrap.min.css" rel="stylesheet">



    <link href="/Daniel/sistema/fonts/css/font-awesome.min.css" rel="stylesheet">

    <link href="/Daniel/sistema/css/animate.min.css" rel="stylesheet">




    <!-- Custom styling plus plugins -->

    <link href="/sct/sistema/css/custom.css" rel="stylesheet">


    <script src="../js/jquery.min.js"></script>

    <link href="/sct/componentes/css/dataTables.bootstrap.min.css" rel="stylesheet">

    




    <!-- Alerts STYLES-->


    <script src="/sct/sistema/assets/sweetalert/dist/sweetalert.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="/sct/sistema/assets/sweetalert/dist/sweetalert.css">



    <!--[if lt IE 9]>

        <script src="../assets/js/ie8-responsive-file-warning.js"></script>

        <![endif]-->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->



</head>
 <style type="text/css">            
.modal-backdrop {
  z-index: -1;
}
      
  </style>

  <style type="text/css">            
		body div#fullContainer #content-wrap {
		  background: #ffffff;
		  bottom: 0;
		  box-shadow: -5px 0px 8px #000000;
		  position: absolute;
		  top: 0;
		  width: 100%;
		}

		#ctrlNavPanel {
		  background: #333333;
		  bottom: 0;
		  box-sizing: content-box;
		  height: 100%;
		  overflow-y: auto;
		  position: absolute;
		  top: 0;
		  width: 250px;
		}
      
  </style>





<body id="body" class="nav-md">



     <div class="container body ">


<?php 
            include ('../menu.php');
        ?>


        <div class="main_container" id="bod">



                                            
                           <?php
    include("../notificacion.php")
?> 

           <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/stylish-portfolio.min.js"></script>

                       <!-- page content -->

            <div class="">

                <div class="">

                    <div class="page-title">

                        <div class="title_left">

                            <h3><i class="fa fa-group"></i>Clientes</h3>

                        </div>



                        

                    </div>

                    <div class="clearfix"></div>



                    <div class="row">

                        <div class="col-md-12 col-xs-12"><!-- inicio formulario-->

                            <div class="x_panel">

                                <div class="x_title">

                                    
                                    <ul class="nav navbar-right panel_toolbox">

                                        <li>
                                            <button type="submit" id='nuevoEmpleado' class="nuevoEmpleado btn btn-success btn-lg">
                                                Nuevo Empleado <i class="fa fa-plus"></i>
                                            </button>
                                    </li>

                                    </ul>

                                    <div class="clearfix"></div>



                    <div class="panel panel-default">

                        <div class="panel-heading">

                             Ver Equipos

                        </div>

                        <div class="panel-body">



                            <div id="tablas" class="table-responsive">


                             



                                    <?php
                                        $link= mysqli_connect("localhost","root","","bd_sct");
                                         if (!$link) {
                                                printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
                                                exit();
                                            }
                                        

                                        $sql="SELECT * FROM trabajadores INNER JOIN puesto ON(trabajadores.idPuesto=puesto.idPuesto) INNER JOIN departamento ON(trabajadores.idDepartamento=departamento.idDepartamento)";


                                        




                    $resultado = mysqli_query($link,$sql)or die(mysqli_error($link));;
                    

                                    ?>
                

              <table  class='table table-striped table-bordered table-hover' id='busqueda' cellspacing='0' width='100%'>
                        <thead>
                          <tr>
                                            

                                            <th>Nombre</th>

                                            <th>Direccion</th>

                                            <th>Departamento</th>


                                            <th>Puesto</th>


                                            <th>Activo</th>


                                            <th>Editar</th>
                                            <th>Baja</th>


                          </tr>
                        </thead>
                        <tbody>









                                    <?php

                                    while($datos=mysqli_fetch_assoc($resultado)){

                                        

                                        $nombre=$datos["nomEmpleado"];

                                        $direccion = $datos["direccion"];

                                        $nombrePuesto=$datos["nomPuesto"];

                                        $nomDepartamento=$datos["nomDepartamento"];
                                        
                                        $encargado= $datos["nomEmpleado"];

                                        $departamento= $datos["nomDepartamento"];

                                        $activo=$datos["activo"];
                                        
                                        

                                    ?>

                                        <tr class="even gradeC" id="user-<?php echo $id;?>">

                                            

				            <td ALIGN=CENTER class="center"><?php echo $nombre;?></td>

                                            <td ALIGN=CENTER class="center"><?php echo $direccion;?></td>

                                            <td ALIGN=CENTER class="center"><?php echo $nomDepartamento;?></td>

                                            <td ALIGN=CENTER class="center"><?php echo $nombrePuesto;?></td>
                                            <td ALIGN=CENTER class="center"><?php echo $activo;?></td>
                                            
                                                                                        
                                        <td ALIGN=CENTER class="center">
                                             <button class="editar btn fa fa-edit"  value="Editar" title="" id="<?php echo $id;?>"/> 

                                            </td>
                                            
                                            <td ALIGN=CENTER class="center">

       

                                             <button class="borrar btn fa fa-times"  value="Borrar" title="Borrar" id="<?php echo $id;?>"/>
                                            

                                            
                                             </td>
                                        </tr>

                                    <?php } ?>



                                                                

                                    </tbody>

              </table>
              






                            </div>

                            

                        </div>

                    </div>




                    <!--End Advanced Tables -->

                




                    </div>

                </div>

                </div>

                <!-- /page content -->

            </div></div>



        </div>



			        <div id="custom_notifications" class="custom-notifications dsp_none">

			            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">

			            </ul>

			            <div class="clearfix"></div>

			            <div id="notif-group" class="tabbed_notifications"></div>

			        </div>



                	</div>
                </div>








                  <div class="modal fade" data-refresh="true" id="modal">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content" id="contenido">
                        



                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                </div><!-- fin body-->


            </body>






    <script src="/sct/componentes/js/jquery.dataTables.min.js"></script>

  

    <script src="/sct/componentes/js/dataTables.bootstrap.min.js"></script>


        <script>

            $(document).ready(function() {

                

              
             
          } );

    </script>

         <!-- CUSTOM SCRIPTS -->

    



<script>
function RefreshTable() {
        setTimeout(function(){$( "#bod" ).load( "empleados.php" )},-20000000);
    }
    

  $( document ).ready(function() {
    //enviar id para generar un mod
    $( ".editar" ).click(function( event ) {
        var idUser = $(this).attr("id");
        $.ajax({
            type: "POST",
            url: 'variableEmpleados.php'+'?'+'id='+ idUser
        });
        $("#contenido").load('empleados/editarEmpleados.php');
        modal();
    });

    $(".nuevoEmpleado").click(function( event ){
        $("#contenido").load('empleados/nuevoEmpleado2.php');
        modal();
    });

    function modal(){
        $('#modal').modal('show');
    }

    $( ".borrar" ).click(function( event ) {
        var idUser = $(this).attr("id");
        swal({   
            title: "\u00BFEst\u00E1 seguro que desea dar de baja al trabajador?",   
            text: "Se dara de baja al trabajador",   
            type: "warning",
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "S\u00ED, dar de baja!",   
            closeOnConfirm: false 




            
        }, 
            
        function(){
            $.post("empleados/bajaEmpleados.php",{id:idUser},function(html){
                  console.log(html[0]);
                  if (html[0] == 'o') {
                    swal({   
                        title: "\u00C9xito",
                        text: "Se ha dado de baja al trabajador!",
                        type: "success",
                        confirmButtonColor: "#fff",
                        confirmButtonText: "",
                        timer:1250,
                        
                        });
                     RefreshTable();
                  } else {
                    sweetAlert("Error", "Intentalo m\u00E1s tarde o contacta al webmaster", "error");
                  }
            });           
        });
    });
$('#busqueda').DataTable({
        "language": {
            "lengthMenu": "Pantalla _MENU_ Archivos por pagina",
            "zeroRecords": "Nada encontrado - Lo sentimos",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Archivos no disponibles",
            "infoFiltered": "(Filtrada de _MAX_ total de archivos)",
            "zeroRecords":    "Cero coincidencias",
            "search":         "Buscar:",
            "paginate": {
              "next":       "Siguiente",
              "previous":   "Anterior"}
      }
    });
 

});

        </script>
        <script src="/sct/sistema/js/bootstrap.min.js"></script>



        <!-- chart js -->

        <script src="/sct/sistema/js/chartjs/chart.min.js"></script>

        <!-- bootstrap progress js -->

        <script src="/sct/sistema/js/progressbar/bootstrap-progressbar.min.js"></script>

        <script src="/sct/sistema/js/nicescroll/jquery.nicescroll.min.js"></script>

        <!-- icheck -->

        <script src="/sct/sistema/js/icheck/icheck.min.js"></script>



        <script src="/sct/sistema/js/custom.js"></script>


</html>