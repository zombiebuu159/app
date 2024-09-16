<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Seguridad Privada en Condominios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bg {
            background-image: url(../recursos/images/bgCamaras.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover; 
        }
    </style>
</head>
<body>
    <div class="container w-75 mt-5 rounded shadow bg-light text-dark p-3">
        <div class="row aling-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded shadow">

            </div>
            <div class="col p-5 rounded-end">
                <div class="text-end">
                    <img src="../recursos/images/logo.png" alt="logo" width="48">
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <!--Login-->
                <form action="#">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-check-label">Mantenerme conectado</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>
                    <div class="my-3">
                        <span>No tienes cuenta? <a href="#">Registrate</a></span> <br>
                        <span><a href="#">Recuperar password</a></span>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

    
</body>
</html>
