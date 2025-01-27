<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index_mediaq.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="shortcut icon" href="../material/logos e iconos/user.png">
    <title>Musa Inspiradora</title>
</head>
<body>
    <div class="container">
        <div class="cabecera">
            <img class="papiro" src="../material/fondos/main.png" alt="">
            <header>
                <div class="barra-nav">
                    <img src="../MATERIAL/logos e iconos/logomusa.png" class="musa" alt="Musa Inspiradora">
                    <nav class="nav-menu">
                        <ul>
                            <li class="nav-item desplegable"><a href="#">Impulso Creativo</a>
                                <ul class="submenu">
                                    <li><a class="submenu-item" href="ejercicios.html">Ejercicios</a></li>
                                    <li><a class="submenu-item" href="#">Imágenes Disparadoras</a></li>
                                    <li><a class="submenu-item" href="#">Generador de Personaje</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item desplegable"><a href="#">Herramientas del Escritor</a>
                                <ul class="submenu">
                                    <li><a href="#" class="submenu-item">Diccionario</a></li>
                                    <li><a href="#" class="submenu-item">Sinónimo y Antónimos</a></li>
                                    <li><a href="#" class="submenu-item">Nombres de personajes</a></li>
                                    <li><a href="#" class="submenu-item">Páginas amigas</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item desplegable"><a href="#">Organizador de Ideas</a>
                                <ul class="submenu">
                                    <li><a href="#" class="submenu-item">Infogramas</a></li>
                                    <li><a href="#" class="submenu-item">Storyplaner</a></li>
                                    <li><a href="#" class="submenu-item">Genealogía de Personaje</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item desplegable"><a href="ayuda.php">Cómo ayudarte</a></li>
                            <li class="nav-item"><a "user" href="http://www.google.com" alt="ingresar"><img class="user" src="../MATERIAL/logos e iconos/user.png" alt="Ingresar"/></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="titulo">
                    <div class="c-izq">
                        <img src="../material/hand/corch-izq.png" alt="decoracion">
                    </div>
                    <ul class="titulo-aparece">
                            <li class="titulo-principal">Musa inspiradora</li>
                            <li class="titulo-secundario">te ayuda cuando tu musa descansa</li>
                    </ul>
                    <div class="c-der">
                        <img src="../material/hand/corch-der.png" alt="decoracion">
                    </div>
                </div>
            </header>
        </div><!-- Cierra cabecera -->
        <div class="cuerpo">
            <main>
                <section class="principal">
                    <article>
                        <p>En este portal encontrarás diversas <a href="#" class="p-color">herramientas</a> para desarrollar tu creatividad y
                            potenciar tu escritura, o superar los bloqueos <a href="ejercicios_tipos.php" class="p-color">creativos</a> propios de cualquier escritor.
                            Una página que posee tanto ejercicios como definiciones y sinónimos, <a href="#" class="p-color">juegos creativos</a> -individuales
                            y grupales- e incluso una sección de <a href="#" class="p-color">seguimiento de proyectos</a>,
                            donde encontrarás aplicaciones como block de notas y un calendario de tu progreso a lo largo de los días.</p>
                    </article>
                </section>
                <div class="division">
                    <img class="division-linea" src="../MATERIAL/hand/division.png" alt="">
                </div>  <!-- CIERRA principal-->

                <section class="explicacion">
                    <h2>Ejercicio del Día</h2>
                    <article>
                        <p>¿Qué <a href="ejercicios_tipos.php">ejercicio</a> tienes ganas de practicar el día de hoy?</p>
                    </article>
                </section>

                <section class="sec-libro">
                    <div class="libro">
                        <img class="libro-tinta1" src="../material/tinta/ink1.png" alt="">
                        <div class="tinta2-padre">
                            <img class="tinta2-hijo tinta-der" src="../material/tinta/ink2.png" alt="">
                            <img class="tinta2-hijo tinta-izq" src="../material/tinta/ink2.png" alt="">
                        </div>
                    </div>
                    <img class="libro-abierto" src="../material/logos e iconos/libro.png" alt="decoracion">
                </section> <!-- Cierre section libro -->
                <section class="usuario">
                        <article>{ Recordá <button class="logue-in reg" id="registrarte">registrarte</button> o <button class="logue-in ing" id="ingresar" href="#">ingresar</button>
                            para guardar tu progreso }</article>

                        <form id="registrarte_form" class="form_click" action="enviar.php" method="post">
                            <input class="form" type="text" placeholder="Nombre" name="nombre" required>
                            <input class="form" type="text" placeholder="Apellido" name="apellido" required>
                            <input class="form" type="text" placeholder="Usuario" name="nick" title="El usuario con el que guardará sus datos en el sitio" required>
                            <input class="form" type="email" placeholder="Mail" name="mail" required>
                            <input class="form" type="password" placeholder="Contraseña" name="clave" required>
                            <input class="form boton" type="submit" value="Registrar">
                        </form>

                        <form id="ingresar_form" class="form_default" action="logueo.php" method="post">
                            <input class="form" type="text" placeholder="Usuario / Mail" name="usuario" required>
                            <input class="form" type="password" placeholder="Contraseña" name="clave" required>
                            <input class="form boton" type="submit" value="Ingresar">
                        </form>
                </section>
                <div class="division">
                    <img class="division-linea" src="../MATERIAL/hand/division.png" alt="decoracion">
                </div>
                <section class="frase">
                    <p class="titulo-principal underline">Frase de la semana:</p>
                    <p class="titulo-secundario smooth">"Un adulto creativo es un niño que ha sobrevivido"</p>
                    <p class="titulo-secundario smooth">Ursula K. Le Guin</p>
                </section>
                <!-- <div class="division">
                    <img class="division-linea" src="../MATERIAL/hand/division.png" alt="">
                </div>            -->
                <!-- <section class="novedades">
                    <center><iframe src="http://www.argentores.org.ar" width="800" height="250"> </iframe></center>
                </section> -->
            </main>
        </div> <!-- Cierra cuerpo -->
        <div class="pie">
            <footer>
                <ul class="redes">
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/fb.png" alt="facebook"></a></li>
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/i.png" alt="instagram"></a></li>
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/p.png" alt="pinterest"></a></li>
                    <li><a href="#"><img class="redes-img" src="../MATERIAL/social media/wp.png" alt="whatsapp"></a></li>
                </ul>
                <!-- <a href="http://www.freepik.com">Designed by starline / Freepik</a> -->
            </footer>
        </div><!-- Cierra pie -->
    </div> <!-- Cierra container -->

    <script>
        registrarte.addEventListener(
            "click",
            function (){
                ingresar_form.classList.remove("form_mostrar");
                registrarte_form.classList.toggle("form_mostrar");
            }
        )
        ingresar.addEventListener(
            "click",
            function (){
                ingresar_form.classList.toggle("form_mostrar");
                registrarte_form.classList.remove("form_mostrar");
            }
        )
    </script>
</body>
</html>