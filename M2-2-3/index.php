<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 2 Ejercicio 2-3</title>
    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="styles/estilo.css">
</head>

<body>
    <!-- CONTENEDOR -->
    <div class="container">
        <!-- CABECERA -->
        <?php include('cabecera.php'); ?>
        <!-- NAVEGACIÓN -->
        <nav class="nav-bar">
            <div class="nav-opcion">
                <a href="#">Inicio</a>
            </div>
            <div class="nav-opcion">
                <a href="#">Servicios</a>
            </div>
            <div class="nav-opcion">
                <a href="#">Proyectos</a>
            </div>
            <div class="nav-opcion">
                <a href="#">Sobre nosotros</a>
            </div>
            <div class="nav-opcion">
                <a href="#">Contacto</a>
            </div>
        </nav>

        <article>
            <!-- ELEMENTOS DESTACADOS -->
            <section class="destacados">
                <div class="cards">
                    <img src="images/img-1.jpg" alt="img1">
                    <h3>Lorem, ipsum dolor.</h3>
                    <a href="#" class="btn">Acceder</a>
                </div>
                <div class="cards">
                    <img src="images/img-2.jpg" alt="img2">
                    <h3>Lorem, ipsum dolor.</h3>
                    <a href="#" class="btn">Acceder</a>
                </div>
                <div class="cards">
                    <img src="images/img-3.jpg" alt="img3">
                    <h3>Lorem, ipsum dolor.</h3>
                    <a href="#" class="btn">Acceder</a>
                </div>
            </section>

            <!-- CONTENIDO CENTRAL -->
            <section class="central">
                <table>
                    <tr>
                        <td class="celda-izq">
                            <h3>Título</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn-2">Ver más</a>
                        </td>
                        <td class="celda-central">
                            <h3>Título</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facere nam exercitationem
                                expedita laboriosam ut dolores, odit adipisci repellendus ratione?</p>
                            <a href="#" class="btn-2">Ver más</a>
                        </td>
                        <td class="celda-dcha">
                            <h3>Título</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn-2">Ver más</a>
                        </td>
                    </tr>
                </table>

            </section>
        </article>

        <!-- PIE -->
        <?php include('pie.php'); ?>

    </div>
</body>

</html>