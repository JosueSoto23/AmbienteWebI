<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/Style.css">


    <title> Primer Proyecto </title>
</head>

<body>

    <header>

        <h3 class="title"> Inicio de Sesión </h3>

    </header>

    <section class="home">

        <div class="container">

            <form action="POST">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Correo Electrónico </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Contraseña </label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> Recuerdame </label>
                </div>
                <button type="submit" class="btn btn-primary"> Ingresar </button>

            </form>

        </div>
        
    </section>

</body>

</html>