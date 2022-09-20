<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilosIndex/index.css">
</head>
<body>
    <nav class="navbar" style="background-color: #4cc2d4;">
		<!-- Navbar content -->
		<div class="container-fluid">
		
				<div class="col">
					<a class="" href="#">
      					<img src="img/logo/logo_large.png" alt="" width="100" height="44" class="d-inline-block align-text-center">
      				</a>
					  
				</div>
				<div class="col; align-text-end">
					<ul class="nav">
					  <li class="nav-item">
					    <a class="nav-link" style="color: black;" aria-current="page" href="#">Inicio</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" style="color: black;" href="#">Ingresar</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" style="color: black;" href="#">Registrarse</a>
					  </li>
					</ul>
				</div> 			 		
		</div>
	</nav>
    <div class="container caja">
        <form action="" class="row g-3 inicio borde">
            <div class="col centro">
                <i class="bi bi-person-circle" style="font-size: 80px;"></i>
            </div>
            <div class="col-12 centro">
                <label for="nombreUsuario" class="form-label ">Nombre de usuario</label>  
                <div class="input-group ">
                    <img src="img/person-fill.svg" alt="" class="iconosInput" width="30" height="30">
                    <input type="text" class="form-control" id="nombreUsuario" placeholder="Ingrese su nombre de usuario" required>
                </div>           
                
            </div> 
            
            <div class="col-12 centro">
                <label for="contrasena" class="form-label">Contraseña</label>
                <div class="input-group ">
                    <img src="img/key.svg" alt="" class="iconosInput" width="30" height="30">
                    <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su Contraseña" required>
                </div>
            </div>
            <div class="col-12 correr">
                <div class="form-check">
                    <input type="checkbox" id="recordarContrasena" class="form-check-input">
                    <label for="recordarContrasena" class="form-check-label">Recordar Contraseña</label>
                </div>
            </div>
            <div class="col-12 correr">
                    <button type="submit" class="btn btn-primary" >
                        <a href="html/dashboard.html" style="text-decoration: none; color: #fff;" >Iniciar</a>
                    </button>
                </a>
                <a href="#">Olvidó su contraseña</a>
            </div>
            <div class="col-12">
            </div>
        </form>
    </div>

    <footer class="centro">
        <h4>Todos los derechos reservados ©</h4>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>