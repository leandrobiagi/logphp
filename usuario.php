<?php
    $usuario = $_GET["usuario"];
    $clave = $_GET["clave"];

    $admin = "admin";
    $user = "user";
    $invitado = "invitado";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- CSS Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/avatar.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                <?php echo $usuario; ?>
            </a>
        </div>
    </nav>
    <main>
<?php
    if($usuario == $admin) {
        // echo "administrador";
?>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <!-- Componente Card con fondo y color -->
            <div class="card h-100 text-bg-primary mb-3">
                <div class="card-header">Usuario admin</div>
                <div class="card-body">
                    <h5 class="card-title">Sesión iniciada como admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                    <!-- Componente Button: etiqueta de botón -->
                    <a href="index.html" class="btn btn-light">Cambiar de usuario</a>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Componente Card con fondo y color -->
            <div class="card h-100 text-bg-primary mb-3">
                <div class="card-header">Usuario admin</div>
                <div class="card-body">
                    <h5 class="card-title">Sesión iniciada como admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                    <!-- Componente Button: etiqueta de botón -->
                    <a href="index.html" class="btn btn-light">Volver</a>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Componente Card con fondo y color -->
            <div class="card h-100 text-bg-primary mb-3">
                <div class="card-header">Usuario admin</div>
                <div class="card-body">
                    <h5 class="card-title">Sesión iniciada como admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                    <!-- Componente Button: etiqueta de botón -->
                    <a href="index.html" class="btn btn-light">Salir</a>
                </div>
            </div>
        </div>  
        <div class="col">
            <!-- Componente Card con fondo y color -->
            <div class="card h-100 text-bg-primary mb-3">
                <div class="card-header">Usuario admin</div>
                <div class="card-body">
                    <h5 class="card-title">Sesión iniciada como admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Componente Card con fondo y color -->
            <div class="card h-100 text-bg-primary mb-3">
                <div class="card-header">Usuario admin</div>
                <div class="card-body">
                    <h5 class="card-title">Sesión iniciada como admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Componente Card con fondo y color -->
            <div class="card h-100 text-bg-primary mb-3">
                <div class="card-header">Usuario admin</div>
                <div class="card-body">
                    <h5 class="card-title">Sesión iniciada como admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                </div>
            </div>
        </div>  
    </div>   
<?php
    } elseif ($usuario == $user) {
        // echo "usuario";
?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <!-- Componente Card con fondo y color -->
                <div class="card h-100 text-bg-info mb-3">
                    <div class="card-header">Usuario user</div>
                    <div class="card-body">
                        <h5 class="card-title">Sesión iniciada como user</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                        <!-- Componente Button: etiqueta de botón -->
                        <a href="index.html" class="btn btn-light">Cambiar de usuario</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Componente Card con fondo y color -->
                <div class="card h-100 text-bg-info mb-3">
                    <div class="card-header">Usuario user</div>
                    <div class="card-body">
                        <h5 class="card-title">Sesión iniciada como user</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                        <!-- Componente Button: etiqueta de botón -->
                        <a href="index.html" class="btn btn-light">Volver</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Componente Card con fondo y color -->
                <div class="card h-100 text-bg-info mb-3">
                    <div class="card-header">Usuario user</div>
                    <div class="card-body">
                        <h5 class="card-title">Sesión iniciada como user</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                    </div>
                </div>
            </div>  
        </div>   
<?php
    } elseif ($usuario == $invitado) {
        // echo "invitado";
?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <!-- Componente Card con fondo y color -->
                <div class="card h-100 text-bg-light mb-3">
                    <div class="card-header">Usuario invitado</div>
                    <div class="card-body">
                        <h5 class="card-title">Sesión iniciada como invitado</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                        <!-- Componente Button: etiqueta de botón -->
                        <a href="index.html" class="btn btn-light">Cambiar de usuario</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Componente Card con fondo y color -->
                <div class="card h-100 text-bg-light mb-3">
                    <div class="card-header">Usuario invitado</div>
                    <div class="card-body">
                        <h5 class="card-title">Sesión iniciada como invitado</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam pariatur ad nesciunt! Eius qui asperiores deleniti voluptatum, eveniet itaque dolorem reiciendis soluta cumque maxime vitae. Iste voluptatem sed laboriosam magni.</p>
                    </div>
                </div>
            </div>
        </div> 
<?php
     } else {
        // echo "usuario inválido";
?>
    <!-- Componente Alert con icono -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            El usuario ingresado no tiene permiso para ingresar.
        </div>
    </div>
    <!-- Componente Button: etiqueta de botón -->
    <a href="index.html" class="btn btn-light">Volver</a>
<?php
     }
?>
    </main>
</body>
</html>