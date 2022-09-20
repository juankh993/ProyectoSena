<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/jquery.dataTables.min.css">
    <title>Consultar Usuarios</title>
</head>
<body>


<!--CONEXION A BASE DE DATOS-->
<?php

$conn = new mysqli("localhost", "root", "", "proyectosena" ) ;
/*if( $conn->connect_errno ) {
  echo "Falla al conectarse a Mysql ( ". $conn->connect_errno . ") " . 
    $conn->connect_error ;
  } else {
    echo $conn->host_info. "\n" ;
  } ;
  */   

  $registros = $conn->query("SELECT * FROM tblusuario");
?>

    <div></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length">
                    <label>Show 
                        <select name="example_length" aria-controls="example" class="">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                      </label>
                    </div>
                    <div id="example_filter" class="dataTables_filter">
                        <label>Buscar:<input type="search" class="" placeholder="" aria-controls="example" id="buscar">
                        </label>
                    </div>
                    <table id="example" class="display dataTable" style="width:100%" aria-describedby="example_info">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 131.172px;">Identificación</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 218.172px;">Nombres</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 96.9688px;">Usuario</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 39.0156px;">Correo electrónico</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 85.5469px;">Teléfono</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.3125px;">Fecha Registro</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.3125px;">Equipo Asignado</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.3125px;">Ubicación</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.3125px;">Acciones</th>
                        </tr>

                        <?php
                              //ASI SE TRAEN LOS REGISTROS DE LA TABLA TBLUSUARIO DE LA COLUMNA NOMBRE
                              while ($usuario = $registros->fetch_assoc()) {
                              //VAMOS A INYECTAR CODIGO HTLM
                                ?>
                              <!-- SE DEBE COLOCAR EL CAMPO DE LA TABLA-->
                          <tr class="odd">
                            <td class="sorting_1"><?php echo $usuario['Identificacion']?></td>
                            <td><?php echo $usuario['Nombre']?></td>
                            <td><?php echo $usuario['Apellido']?></td>
                            <td><?php echo $usuario['Telefono']?></td>
                            <td><?php echo $usuario['contrasena']?></td>
                            <td><?php echo $usuario['CorreoElectronico']?></td>
                            <td><?php echo $usuario['area']?></td>
                            <td><?php echo $usuario['cargo']?></td>
                            <td><?php echo $usuario['nombreUsuario']?></td>
                            <td><?php echo $usuario['rolUsuario']?></td>
                            <td>
                                <select class="form-control" id="tipoDocumento" >
                                    <option>HP-4548417op</option>
                                  </select>
                            </td>
                            <td>
                                <select class="form-control" id="tipoDocumento" >
                                    <option>Urgencias</option>
                                  </select>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="../../img/edit-button.png" data-toggle="modal" data-target="#exampleModal" alt="" class="iconosInput" width="30" height="30">
                                </a>
                                <a href="#">
                                    <img src="../../img/trash-bin.png" alt="" class="iconosInput" width="30" height="30">
                                </a>
                        </tr>

                                <?php
                                echo $usuario['Nombre']."<br>";
                              
                              }

                        ?>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="sorting_1">CC 1045495819</td>
                            <td>Diego Perez Gomez</td>
                            <td>diegop12</td>
                            <td>diegop@gmail.com</td>
                            <td>3120458954</td>
                            <td>14/01/2020</td>
                            <td>
                                <select class="form-control" id="tipoDocumento" >
                                    <option>HP-4548417op</option>
                                  </select>
                            </td>
                            <td>
                                <select class="form-control" id="tipoDocumento" >
                                    <option>Urgencias</option>
                                  </select>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="../../img/edit-button.png" data-toggle="modal" data-target="#exampleModal" alt="" class="iconosInput" width="30" height="30">
                                </a>
                                <a href="#">
                                    <img src="../../img/trash-bin.png" alt="" class="iconosInput" width="30" height="30">
                                </a>
                        </tr></tbody>
                   
                </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="-1" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next">Next</a></div></div>
            </div>
            <!--MODAL-->
    <div class="modal fade" id="myModal" data-toggle="modal" >
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
          </div>
          <div class="row">
            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
          </div>
          <div class="row">
            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
          </div>
          <div class="row">
            <div class="col-sm-9">
              Level 1: .col-sm-9
              <div class="row">
                <div class="col-8 col-sm-6">
                  Level 2: .col-8 .col-sm-6
                </div>
                <div class="col-4 col-sm-6">
                  Level 2: .col-4 .col-sm-6
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
    </div>
    




 
    <script src="../../js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../../js/script.js"></script>
</body>
</html>