<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale-1, shrink-to-fit-no">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/miestilo.css">
	<title>Registro Alumnos</title>
</head>
<body>
	<div class="container">
		<nav class="nav">
		  <a class="nav-link active" href="#">Incio</a>
		  <a class="nav-link" href="#">Matriculas</a>
		  <a class="nav-link" href="#">Cursos</a>
		</nav>
		<div class="row">
             <div id="caja1" class="col-8">
               <h4>Lista de Alumnos Registrados</h3>
             </div>

             <div class="col-4">
               <h4>Registrar Alumnos</h3>
               <form method="POST" action="">
					  <div class="form-group">
					    <label> Ingrese Apellido Paterno</label>
					    <input type="text" class="form-control" name="txt_paterno" placeholder="Ingrese Apellido Paterno">
					    <label> Ingrese Apellido Materno</label>
					    <input type="text" class="form-control" name="txt_materno" placeholder="Ingrese Apellido Materno">
					    <label> Ingrese Nombres</label>
					    <input type="text" class="form-control" name="txt_nombres" placeholder="Ingrese Nombres">
					    <label> Ingrese Direccion</label>
					    <input type="text" class="form-control" name="txt_direccion" placeholder="Ingrese Direccion">
					    <label> Selecciones Sexo:</label>
					    <select class="form-control">
					    	<option selected>Selecciones</option>
					    	<option values="1">Masculino</option>
					    </select>
					    <button type="submit" class="btn btn-dark">REGISTRAR</button>
					    <button type="reset" class="btn btn-danger">LIMPIAR</button>
					  </div>
			    </form>
						 

           </div>
		</div>

       <h1>Registro Alumnos </h1>
    </div>
</body>
</html>