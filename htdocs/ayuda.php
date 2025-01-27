<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ayuda.css">    
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="shortcut icon" href="../material/logos e iconos/user.png">
    <title>Ayuda | Musa Inspiradora</title>
</head>
<body>
    <div class="container">
        <header>
            <a href="index.php"><img src="../MATERIAL/logos e iconos/logomusa.png" class="musa" alt="Musa Inspiradora"></a>
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
                    <li class="nav-item desplegable"><a href="#">Cómo ayudarte</a></li>
                    <li class="nav-item"><a "user" href="http://www.google.com"><img class="user" src="../MATERIAL/logos e iconos/user.png" alt="Ingresar"/></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="ayuda-texto">
                <h1>Cómo te podemos Ayudar</h1>
                <p>Si navegaste a lo largo de toda nuestra web, usaste las herramientas, hiciste los ejercicios
                    y hasta consultaste con un psicólogo pero nada de eso te resultó, ¡no desesperes!</p>
                <h2>Acá te dejamos algunas ayuditas extras que por ahí no consideraste y quieras intentar;</h2>
            </section>
           
            <section class="ayuda-items">
                <div class="ayuda-items-tipos">
                    <img src="../MATERIAL/imagenes/talleres.png" alt="Talleres">
                        <div class="ayuda-item-texto">
                        <h3>Talleres</h3>
                        <p class="ayuda-img-texto">Los consultores de <b>Musa</b> dan talleres en diferentes Centros Culturales
                        y espacios de CABA, si estás por la zona, entrá y 
                        enterate cuál te queda más cerca.</p>
                        </div>  
                </div>
                <div class="ayuda-items-tipos">
                    <img src="../MATERIAL/imagenes/clases.png" alt="Talleres">                   
                    <div class="ayuda-item-texto" alt="Clases Virtuales">
                        <h3>Clases Virtuales</h3>
                        <p class="ayuda-img-texto">Si preferís manjear tus propios tiempos, te recomendamos
                        la modalidad online. Mandanos un mail con tu
                        disponibilidad horaria y alguna musas se pondrá en contacto a la brevedad.
                        </p>
                    </div>
                </div>
                <div class="ayuda-items-tipos">
                    <img src="../MATERIAL/imagenes/tutoria.png" alt="Talleres">                   
                    <div class="ayuda-item-texto" alt="Tutorías">
                        <h3>Tutorías</h3>
                        <p class="ayuda-img-texto">Se trabajará a partir de un texto o idea inicial, ayudándote
                            a darle forma. Las tutorías pueden ser por mail, skype o presenciales
                        de acuerdo a tu disponibilidad.
                        </p>
                    </div>
                </div>
            </section>

            <section class="ayuda-contacto">
                <h2>Escribinos para más información sobre éstas u otras actividades:</h2>
                <form class="ayuda-contacto-form" action="formularioContacto.php" method="post">
                    <input class="form" type="text" name="nombre" value="Nombre Completo" required>
                    <input class="form" type="text" name="numero" value="Número de contacto" required>
                    <input class="form" type="email" name="mail" value="Correo Electrónico" required>
                    <textarea class="form" name="mensaje" placeholder="Escriba su consulta aquí" cols="30" rows="10" maxlength="300" required></textarea>
                    <input class="form boton" type="submit" value="Enviar">
                </form>
            </section>

        </main>
        <footer>
            <ul class="redes">
                <li><a href="#"><img src="../MATERIAL/social media/fb.png" alt="facebook"></a></li>
                <li><a href="#"><img src="../MATERIAL/social media/i.png" alt="instagram"></a></li>
                <li><a href="#"><img src="../MATERIAL/social media/p.png" alt="pinterest"></a></li>
                <li><a href="#"><img src="../MATERIAL/social media/wp.png" alt="whatsapp"></a></li>
            </ul>
            <!-- <a href="http://www.freepik.com">Designed by starline / Freepik</a> -->
        </footer>
    </div> <!-- Cierra container -->
</body>
</html>