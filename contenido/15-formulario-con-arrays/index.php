<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulario con Array</title>
</head>
<body>
    <div class="container">
        <h1 class="page-header">Mi primer formulario</h1>
        <form action="procesar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" class="form-control">
            </div>

            <!-- Agregamos un campo que contendra un arreglo -->
            <div class="card">
                <div class="card-header">
                Ingrese los datos de los libros
                </div>
                <?php for($i=0; $i<=2; $i++): ?>
                <div class="card-body row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="libro">Libro N° <?php echo $i + 1;?>:</label>
                            <input type="text" name="libro[<?php echo $i;?>][nombre]" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="libro"># Páginas:</label>
                            <input type="text" name="libro[<?php echo $i;?>][paginas]" class="form-control">
                        </div>
                    </div>
                    
                </div>
                <?php endfor; ?>
            </div>
            <!-- Hasta aqui -->

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>