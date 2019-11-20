<?php 
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="librerias/bootstrap/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/jquery.1.8.1.js"></script>
<script src="librerias/jquery.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

 
</head>

<body  >


  <form method="POST" class="formulario" action="login.php">
  
    <div class="container">

<!--<center> <img src="fondo.jpg" alt="Inicio"></center>-->
  <img src="licencia.jpg" class="img-fluid" alt="Responsive image">


        <div class="card">

            <div class="alert alert-danger" role="alert">
   <center>Búsqueda de Licencia de Conducir de Vehículos Menores</center>
</div>
              
            <form>
     
            <div class="card-body">
              <p class="text-muted">Esta consulta nos permite encontrar las Licencias de Conducir de Vehículos Menores (Motos y Mototaxis) emitidas por la Oficina de Transportes de la Municipalidad de Provincial de Lampa, ingrese el DNI del Titular y a continuación haga click en el botón Ingresar.</p>
            
               <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                  <div class="alert alert-danger"><center><h4>Datos no son Correctos, no existe en la Base de Datos </h4></center></div>
                <?php endif; ?>
 
  </form>  




<div   class="form-row">
    <div class="form-group col-md-6">

       <label for="inputEmail4" class="text-muted">Tipo Documento:</label>
      
      <select class="custom-select custom-select-lg mb-3">

  <option value="1">DOCUMENTO NACIONAL DE IDENTIDAD</option>
 

</select>
    </div>
    

        <div class="form-group col-md-6">

  <label for="inputPassword4" class="text-muted">Nro. de Documento:</label>
      <input class="form-control"  type="text"  name="dni"   required>

          </div>

  <div class="form-group col-md-6">

  <label for="inputPassword4" class="text-muted">Captcha:</label>
     
          </div>
         
    </div>
     <div class="g-recaptcha" data-sitekey="6Lcwl8MUAAAAAKwyi4JJBkaG0cWkHYx8ipo4kwjr"></div>

  
                    <div class="btn-group">
                        <button  type="submit" class="btn btn-info" id="Iniciar">Ingresar</button>
                      </div>
                     





</form>

    

</script>


</body>

</html>


