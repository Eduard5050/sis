<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de reputación</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            text-align: center;
        }

        .header img {
            width: 100%; 
            height: auto; 
        }

        .menu-container {
            background-color: #202C4B;
            padding: 1em 0;
        }

        .menu {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            margin: 0 1em;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
        }

        .menu a:hover {
            text-decoration: underline;
        }

        .main-content {
            flex: 1;
            padding: 2em;
            text-align: center;
        }

        .container{
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer{
            background-color: #000000;
            padding: 80px 0;
        }
        .footer-row{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .footer-links{
            width: 30%;
            padding: 0 15px;
        }

        .footer-links h4 {
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 25px;
            font-weight: 500;
            border-bottom: 2px solid #fff;
            padding-bottom: 10px;
            display: inline-block;
        }

        .footer-links ul li a{
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            display: block;
            margin-bottom: 15px;
            transition: all .3s ease;
        }

        .footer-links ul li a:hover{
            color: #fff;
            padding-left: 6px;
        }

        .site-section.section-hello {
            display: flex;
            justify-content: center;
            padding: 40px;
            background-color: #f0f0f0;
        }

        .widget {
            display: flex;
            align-items: center;
            width: 800px; 
        }

        .widget img {
            width: 300px; 
            margin-left: 20px;
        }

        .widget .text {
            flex: 1;
            text-align: center;
        }

        .coverage-section {
            background-color: white;
            padding: 40px;
            text-align: center;
        }

        .coverage-section h1 {
            margin-bottom: 20px;
        }

        .coverage-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .coverage-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            position: relative;
        }

        .coverage-item img {
            width: 100%; 
            height: auto;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.1)); 
        }

        .coverage-item ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0 0;
            text-align: center;
            display: none; 
            position: absolute;
            top: 100%;
            background-color: white; 
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.)); 
        }

        .coverage-item li {
            margin: 0;
        }

        .coverage-item li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
        }

        .coverage-item li a:hover {
            background-color: #f0f0f0; 
        }

        .coverage-item:hover ul {
            display: block; 
        }

        .servicio{
            flex: 1;
            padding: 2em;
            text-align: center;
        }


        .servicio-section {
            background-color: white;
            padding: 40px;
            text-align:center;
        }

        .servicio-section h1 {
            margin-bottom: 20px;
        }

        .servicio-section h2 {
            text-align: left;
        }

        .servicio-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .servicio-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            position: relative;
        }

        .servicio-item img {
            width: 100%; 
            height: auto; 

        }

        .coverage-item ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0 0;
            text-align: left;
            display: none; 
            position: absolute;
            top: 100%; 
            background-color: white;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.1)) ;
        }

        .servicio-item li {
            margin: 0;
        }

        .servicio-item li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
        }

        .servicio-item li a:hover {
            background-color: #f0f0f0; 
        }

        .servicio-item:hover ul {
            display: block; 
        }

        .planes-container {
           display: flex;
           justify-content: space-around; /* Alinea los elementos con espacio alrededor */
           flex-wrap: wrap; /* Permite que los elementos se muevan a la siguiente línea si no caben */
           margin: 20px 0;
        }

       .plan {
          text-align: center;
            margin: 10px;
        }

        .plan img {
          max-width: 100%;
            height: auto;
        }

        /* Estilos para la ventana modal */
        .modal {
        display: none; /* Escondido por defecto */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }

        .servicio-header h1 {
        background-color: #202C4B;
        color: white;
        padding: 10px 600px;
        text-align: center;
        display: flex;
        width: auto;
        margin: 0 auto;
        }

        .but-1 {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px; /* Asegúrate de añadir 'px' para definir las unidades */
        background-color: #202C4B;
        color: white;
        padding: 10px 20px; /* Añade padding para aumentar el tamaño del botón */
        border: none; /* Elimina el borde predeterminado */
        cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
        margin-top: 10px; /* Añade un margen superior para espacio entre elementos */
        }
        .but-1:hover {
        background-color: #fc0303; /* Cambia el color de fondo al pasar el cursor */
        }
        .mas-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        }

        .form1 {
            width: 50%;
            max-width: 600px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.1));
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
            color: #333;
            transition: border-color 0.3s;
        }

        input::placeholder, textarea::placeholder {
            color: #999;
        }

        input:focus, textarea:focus {
            border-color: #007BFF;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-enviar {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
        }

        .form-enviar:hover {
            background-color: #0056b3;
        }

        .foot:hover{
            background-color: #fc0303;
        }

        .carousel {
    display: flex;
    overflow: hidden;
    width: 100%;
    position: relative;
}

.planes {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 100%;
    transition: transform 0.5s ease-in-out;
}

.hexagon {
    background-color: #ccc;
    width: 50%;
    padding: 20px;
    clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
    text-align: center;
}

.hexagon h1 {
    margin: 0;
}

.image-container {
    width: 50%;
    text-align: right;
}

.image-container img {
    max-width: 50%;
    height: auto;
}

.carousel-buttons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.carousel-buttons button {
    margin: 0 10px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}
        </style>
        <script>
        function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";    
        }

        // Cerrar el modal si el usuario hace clic fuera de él
        window.onclick = function(event) {
        var modals = document.getElementsByClassName("modal");
        for (var i = 0; i < modals.length; i++) {
            if (event.target == modals[i]) {
                modals[i].style.display = "none";
            }
        }
        }


        let currentPlanes = 0;

function showPlanes(index) {
    const plans = document.querySelectorAll('.plan');
    if (index >= plans.length) {
        currentPlanes = 0;
    } else if (index < 0) {
        currentPlanes = plans.length - 1;
    } else {
        currentPlanes = index;
    }
    plans.forEach((plan, i) => {
        plan.style.transform = `translateX(-${currentPlanes * 100}%)`;
    });
}

function nextPlanes() {
    showPlan(currentPlanes + 1);
}

function prevPlanes() {
    showPlanes(currentPlanes - 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showPlanes(currentPlanes);
});
</script>
</head>
<body>
    <header class="header">
        <img src="img/atro.gif" alt="Header Image">
    </header>

    <div class="menu-container">
        <ul class="menu">
            <li><a href="#conoce">Conócenos</a></li>
            <li><a href="#about">Cobertura</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="/Sistema de manejo de reputación/login/login.php">Inicio de sesión</a></li>
            <li><a href="#planes">Planes de monitoreo</a></li>
            <li><a href="mailto:media.insight.monitoring@gmail.com">media.insight.monitoring@gmail.com</a></li>
            <li><a href="tel:555-10-1888">555-10-1888</a></li>
        </ul>
    </div>

    <div class="main-content">
        <p>Contenido principal de la landing page.</p>
        <p>Aquí puedes agregar información sobre tu producto, servicio o cualquier otra cosa que quieras destacar.</p>
    </div>
    <section class="site-section section-hello" id="conoce">
        <div class="widget">
            <div class="text">
                <h1>Conócenos</h1>
                <p>Media insight es una empresa con más de 10 años de experiencia en el monitoreo de medios impresos,
                electrónicos, digitales y redes sociales. Ofrecemos servicios de muy buena calidad, además de ser eficientes y destacados.
                Nuestro propósito es convertirnos en los ojos de nuestros clientes y ofrecerles un informe completo de los temas que tienen
                que ver con ellos, así como los alcances que tienen en medios de comunicación.</p>
            </div>
            <img src="img/conoce1.png" alt="Conócenos">
        </div>
    </section>

    <div class="coverage-section" id="about">
        <h1>Cobertura</h1>
        <div class="coverage-images">
            <div class="coverage-item">
                <img src="img/Cobertura/Periodicos.png" alt="Cobertura 1">
                    <li><a href="">Periódicos</a>
                        <ul>
                            <li><a href="">Nacionales</a></li>
                            <li><a href="">Estatales</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="coverage-item">
                <img src="img/Cobertura/Revista.png" alt="Cobertura 2">
                    <li><a href="">Revistas</a>
                        <ul>
                            <li><a href="">Nacionales</a></li>
                            <li><a href="">Estatales</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="coverage-item">
                <img src="img/Cobertura/Radioytv.png" alt="Cobertura 3">
                    <li><a href="">Radio y TV</a>
                        <ul>
                            <li><a href="">Nacionales</a></li>
                            <li><a href="">Estatales</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="coverage-item">
                <img src="img/Cobertura/Portales.png" alt="Cobertura 4">
                    <li><a href="">Portales</a>
                        <ul>
                            <li><a href="">Nacionales</a></li>
                            <li><a href="">Estatales</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="coverage-item">
                <img src="img/Cobertura/Redessociales.png" alt="Cobertura 5">
                    <li><a href="">Redes sociales</a>
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">X<a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">YouTube</a></li>
                        </ul>
                    </li>
            </div>
        </div>
    </div>
    <section class="servicio-section" id="servicios">
    <div class="servicio-header"><h1>Servicios</h1></div>
    <h2>Monitoreo y analisis regional</h2>
    <div class="servicio-images">
    <div class="servicio-item">
        <img src="img/Servicios/Mediosimpresos.png" alt="servicios 1">
        <li><a href="">Medios Impresos</a></li>
    </div> 
    <div class="servicio-item">
        <img src="img/Servicios/Medioselectronicos.png" alt="servicios 2">
        <li><a href="">Medios Electrónicos</a></li>
    </div> 
    <div class="servicio-item">
        <img src="img/Servicios/Mediosdigitales.png" alt="servicios 3">
        <li><a href="">Medios Digitales</a></li>
    </div> 
    <div class="servicio-item">
        <img src="img/Servicios/Redessociales.png" alt="servicios 4">
        <li><a href="">Redes Sociales</a></li>
    </div> 
    </div>
    </section>
    <section class="planes-section" id="planes">
    <h1 style="text-align: center;">Planes de Monitoreo</h1>
    <div class="planes-container">
        <div class="plan">
            <h4>Plan 1</h4>
            <img src="img/Monitoreo/Plan1.png" alt="plan1" width="300px">
            <button class="but-1" onclick="openModal('modal1')">Ver más</button>
        </div>
        <div class="plan">
            <h4>Plan 2</h4>
            <img src="img/Monitoreo/Plan2.png" alt="plan2" width="300px">
            <button class="but-1" onclick="openModal('modal2')">Ver más</button>
        </div>
        <div class="plan">
            <h4>Plan 3</h4>
            <img src="img/Monitoreo/Plan3.png" alt="plan3" width="300px">
            <button class="but-1" onclick="openModal('modal3')">Ver más</button>
        </div>
    </div>

    <!-- Modales -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h2>Plan 1</h2>
            <p>Información detallada sobre el Plan 1...</p>
        </div>
    </div>
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2>Plan 2</h2>
            <p>Información detallada sobre el Plan 2...</p>
        </div>
    </div>
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2>Plan 3</h2>
            <p>Información detallada sobre el Plan 3...</p>
        </div>
    </div>
</section>
<div class="carousel">
        <section class="planes" id="plan-1">
            <div class="hexagon">
                <h1>Plan 1</h1>
                <ul>
                    <li>Medios electrónicos (Radio y Televisión definir cuantos testigos al mes de acuerdo con el cliente)</li>
                    <li>Sitios web</li>
                    <li>Medios Print</li>
                    <li>Redes sociales (X, Facebook e Instagram)</li>
                    <li>Reporte descargable por el cliente</li>
                    <li>Creación de grupo de WhatsApp para dar seguimiento puntual e inmediato</li>
                    <li>Acceso a la plataforma de monitoreo</li>
                </ul>
            </div>
            <div class="image-container">
                <img src="img/Monitoreo/Plan1.png" alt="plan1">
            </div>
        </section>
        <section class="planes" id="plan-2">
            <div class="hexagon">
                <h1>Plan 2</h1>
                <ul>
                   Contenido de plan 2
                    <!-- Contenido del Plan 2 -->
                </ul>
            </div>
            <div class="image-container">
                <img src="img/Monitoreo/Plan2.png" alt="plan2">
            </div>
        </section>
        <section class="planes" id="plan-3">
            <div class="hexagon">
                <h1>Plan 3</h1>
                <ul>
                    <!-- Contenido del Plan 3 -->
                </ul>
            </div>
            <div class="image-container">
                <img src="img/Monitoreo/Plan3.png" alt="plan3">
            </div>
        </section>
    </div>
    <div class="carousel-buttons">
        <button onclick="prevPlan()">Anterior</button>
        <button onclick="nextPlan()">Siguiente</button>
    </div>
<section class="mas-info">
    <h1 style="text-align:center;">Más información</h1>
    <form class="form1"
    action="https://formspree.io/f/mldrjvvq"
    method="POST">
        <div class="form-group">
            <label for="name">*Nombre/Empresa</label>
            <input type="text" name="name" id="name" placeholder="Nombre/Empresa">
        </div>
        <div class="form-group">
            <label for="email">*Correo Electrónico</label>
            <input type="email" name="email" id="email" placeholder="Correo Electrónico">
        </div>
        <div class="form-group">
            <label for="subject">*Asunto</label>
            <input type="text" name="subject" id="subject" placeholder="Asunto">
        </div>
        <div class="form-group">
            <label for="message">*Mensaje</label>
            <textarea name="message" id="message" placeholder="Escribe tu mensaje aquí..."></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="form-enviar">Enviar</button>
        </div>
    </form>
</section>
        <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>Compañia</h4>
                    <ul style="list-style: none;">
                    <img src="img/Footer/Madigen.png" alt="Footer1" width="250px">
                    <img src="img/Footer/Media.png" alt="Footer2" width="250px">
                </div>
                <div class="footer-links">
                    <h4>Ayuda</h4>
                    <ul style="list-style: none;">
                        <li><a href="#conoce">Conocenos</a></li>
                        <li><a href="#about">Cobertura</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#planes">Planes de monitoreo</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contactanos</h4>
                    <ul style="list-style: none;">
                        <a class="foot" href="https://www.facebook.com/people/Media-Insight/61561536801890/?mibextid=LQQJ4d" target="_blank"><img src="img/Footer/Facebook.png" alt="Footer3" width="50px"></a>
                        <a class="foot" href="" target="_blank"><img src="img/Footer/Instagram.png" alt="Footer4" width="50px"></a>
                        <a class="foot" href="" target="_blank"><img src="img/Footer/Ubicación.png" alt="Footer5" width="50px"></a>
                        <a class="foot" href="" target="_blank"><img src="img/Footer/Whatsapp.png" alt="Footer6" width="50px"></a>
                        <a class="foot" href="" target="_blank"><img src="img/Footer/Correo.png" alt="Footer7" width="50px"></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <p style="text-align: center;">Todos los derechos reservados &copy; 2024</p>
</footer>

</body>
</html>
