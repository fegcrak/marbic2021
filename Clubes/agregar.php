<?php
/* include_once('Clubes.php');
if ( isset($_POST) && !empty($_POST) ){
    $nuevo_clubes = new clubes(); 
    $nuevo_clubes->crear_clubes($_POST);

    if ($nuevo_clubes){
        echo "Muy bien, usuario guardado";
    }
 } */

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">

    <title>Document</title>
</head>

<body>
    <?php
    /*include_once('../menu.php');*/
   ?>
    <div class="container">

        <form method="POST" enctype="multipart/form-data">


            <div class="mb-3">
                <label for="apellido" class="form-label">id</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="correo_electronico" class="form-label">nombre </label>
                <input type="text" class="form-control" id="correo_electronico" name="correo_electronico"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="responsable" class="form-label">responsable</label>
                <input type="text" class="form-control" id="responsable" name="rsponsable" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="celular_responsable" class="form-label">corre_electronico</label>
                <input type="text" class="form-control" id="Celular_responsable" name="Celular_responsable"
                    aria-describedby="emailHelp">
            </div>


            <div class="mb-3">
                <label for="descripcion" class="form-label">celular_responsable</label>
                <input type="text" class="form-control" id="Celular_responsable" name="descripcion"
                    aria-describedby="emailHelp">
            </div>

            
            <div class="mb-3">
                <label for="cantidad_de_personas" class="form-label">descripccion</label>
                <input type="text" class="form-control" id="cantidad_de_personas" name="cantidad_de_personas"
                    aria-describedby="emailHelp">
            </div>

           
            <div class="mb-3">
                <label for="cantidad_de_personas" class="form-label">ano_de_inicio</label>
                <input type="text" class="form-control" id="cantidad_de_personas" name="cantidad_de_personas"
                    aria-describedby="emailHelp">
            </div>

           
            <div class="mb-3">
                <label for="cantidad_de_personas" class="form-label">cantida_de_personas</label>
                <input type="text" class="form-control" id="cantidad_de_personas" name="cantidad_de_personas"
                    aria-describedby="emailHelp">
            </div>


            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="rol" name="rol">
                    <option selected>seleccione un rol</option>
                    <option value="1">administrativo</option>
                    <option value="2">profesor</option>
                    <option value="3">estudiante</option>
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>