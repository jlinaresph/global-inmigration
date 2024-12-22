<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Imigration</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/ws.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href="./assets/img/favicon-global.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <nav class="navbar">
            <!-- Logo -->
            <div class="logo">
                <a href="./index.html">
                    <img src="./assets/img/Logo.png" alt="Logo de Global Inmigration">
                </a>
            </div>


            <!-- Icono del menú hamburguesa -->
            <div class="menu-icon" id="menu-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!-- Menú de navegación -->
            <ul class="nav-links" id="nav-links">
                <li><a href="./index.html">Inicio</a></li>
                <li><a href="./somos.html">Quiénes somos</a></li>
                <li><a href="./servicio.html">Servicios</a></li>
                <li><a href="./testimonio.html">Testimonios</a></li>
                <li><a href="./contacto.html">Contáctanos</a></li>
                <!-- Botón "Síguenos" dentro del menú -->
                <li>
                    <a href="https://www.instagram.com/globalinmigration.2018/" class="btn-follow">Síguenos</a>
                </li>
            </ul>
        </nav>
    </header>



    <script>
        // Activar y desactivar el menú hamburguesa
        const menuIcon = document.getElementById('menu-icon');
        const navLinks = document.querySelector('.nav-links'); // Selección por clase

        menuIcon.addEventListener('click', () => {
            navLinks.classList.toggle('active'); // Activa el menú
            menuIcon.classList.toggle('open'); // Añade la animación de las barras
        });
    </script>


    <a href="https://api.whatsapp.com/message/55MZQV6EBFD6B1?autoload=1&app_absent=0" class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono"></i>
    </a>
    <bt></br>
        <!-- Sección de Inicio -->
        <section class="hero">
            <div class="hero-content-custom">
                <h3>BIENVENIDOS</h3>
                <h1>¡TU MEJOR ALIADO PARA MIGRAR!</h1>
                <div class="extra-text-bottom">Con el respaldo que necesitas y expertos a tu lado, hacemos que cada paso hacia tu nuevo hogar sea seguro, sencillo y lleno de oportunidades.</div>
                <br>
                <a href="./somos.html" class="custom-button">Conócenos</a>
            </div>
            <div class="hero-image">
                <img src="assets/img/icono.png" alt="Avión y globo">
            </div>
        </section>

        <section id="quienes-somos-nuevo" class="about-section">
            <div class="container">
                <!-- Título central -->
                <h2 class="section-title">¡Simplificamos tu Proceso Migratorio!</h2>
                <!-- Descripción corta -->
                <p class="section-description">
                    En Global Inmigration, somos tus aliados estratégicos para migrar con éxito. Nuestra experiencia y compromiso garantizan un servicio excepcional y resultados concretos.
                </p>
                <br>
                <!-- Primera fila: Texto a la izquierda, imagen a la derecha -->
                <div class="content-wrapper">
                    <div class="text-content">
                        <!-- Título a la izquierda -->
                        <h3>¿Por qué Elegirnos?</h3>
                        <!-- Descripción debajo -->
                        <p>
                            • Más de 6 años de experiencia respaldan nuestra excelencia.<br>
                            • Asesoría personalizada para cada cliente.<br>
                            • Garantizamos procesos rápidos y sin complicaciones.<br>
                            • Cobertura en visas, trámites migratorios y legales.<br>
                        </p>
                        <p class="call-to-action">¡Descubre cómo podemos ayudarte a alcanzar tu objetivo migratorio!</p>
                        <!-- Botón -->
                        <br>
                        <a href="./servicio.html" class="custom-button">Nuestros Servicios</a>
                    </div>
                    <!-- Imagen a la derecha -->
                    <div class="image-content">
                        <img src="assets/img/servicios3.jpeg" alt="Equipo trabajando juntos">
                    </div>
                </div>

                <!-- Segunda fila: Texto a la derecha, imagen a la izquierda -->
                <div class="content-wrapper reverse-layout">
                    <!-- Imagen a la izquierda -->
                    <div class="image-content">
                        <img src="assets/img/servicios4.jpeg" alt="Asesoría personalizada">
                    </div>
                    <div class="text-content">
                        <!-- Título a la derecha -->
                        <h3>¿Qué Ofrecemos?</h3>
                        <!-- Descripción debajo -->
                        <p>
                            • Redacción de documentos legales y seguimiento integral.<br>
                            • Tramitación de visas para Colombia y otros países.<br>
                            • Convalidación de estudios realizados en el extranjero.<br>
                            • Asesoramiento en trámites legales y mercantiles.<br>
                        </p>
                        <p class="call-to-action">¡Haz clic y conoce todos nuestros servicios!</p>
                        <!-- Botón -->
                        <br>
                        <a href="./contacto.html" class="custom-button">Contáctanos</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="nuestro-compromiso" class="commitment-section">
            <div class="container">
                <!-- Título central -->
                <h2 class="section-title">Nuestro Compromiso Contigo</h2>
                <p class="section-description">
                    En Global Inmigration, más que valores, tenemos compromisos que respaldan cada paso en tu proceso migratorio. Estos son los pilares que nos guían para hacer realidad tus sueños.
                </p>

                <!-- Contenedor de compromisos -->
                <div class="commitments-grid">
                    <!-- Compromiso 1 -->
                    <div class="commitment-card">
                        <div class="icon-circle">
                            <img src="./assets/img/Respeto-y-Empatía.png" alt="Icono de respeto">
                        </div>
                        <h3>Respeto y Empatía</h3>
                        <p>
                            Entendemos lo desafiante que puede ser migrar. Por eso, te acompañamos con respeto, poniéndonos en tus zapatos en cada etapa.
                        </p>
                    </div>

                    <!-- Compromiso 2 -->
                    <div class="commitment-card">
                        <div class="icon-circle">
                            <img src="./assets/img/Transparencia-Total.png" alt="Icono de transparencia">
                        </div>
                        <h3>Transparencia Total</h3>
                        <p>
                            Desde el primer contacto, te ofrecemos información clara y precisa, para que tomes decisiones informadas y sin sorpresas.
                        </p>
                    </div>

                    <!-- Compromiso 3 -->
                    <div class="commitment-card">
                        <div class="icon-circle">
                            <img src="./assets/img/Innovación-Constante.png" alt="Icono de innovación">
                        </div>
                        <h3>Innovación Constante</h3>
                        <p>
                            Mejoramos continuamente nuestros servicios para ofrecerte soluciones efectivas que se adapten a tus necesidades.
                        </p>
                    </div>

                    <!-- Compromiso 4 -->
                    <div class="commitment-card">
                        <div class="icon-circle">
                            <img src="./assets/img/Seguridad-Garantizada.png" alt="Icono de seguridad">
                        </div>
                        <h3>Seguridad Garantizada</h3>
                        <p>
                            Tus datos e información personal están protegidos bajo estrictas normas de seguridad y confidencialidad.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Nuestros Servicios -->
        <section class="our-services container">
            <h3>Nuestros Servicios</h3>
            <p class="services-description">
                En Global Inmigration, nuestra misión es facilitar el proceso migratorio, brindando un servicio personalizado y completo. Nos enfocamos en garantizar que cada cliente se sienta apoyado en cada etapa, desde la planificación hasta la ejecución, asegurando que su experiencia sea fluida, segura y eficiente.
            </p>
            <div class="services-grid">
                <div class="service-cards">
                    <!-- Cada tarjeta con un enlace -->
                    <a href="./servicio.html" class="card2">
                        <img src="./assets/img/Redacción.mp4" alt="Redacción y Gestión de Documentos Legales">
                        <p>Redacción y Gestión de Documentos Legales</p>
                    </a>
                    <a href="./servicio.html" class="card2">
                        <img src="./assets/img/Procesos Jurídicos.mp4" alt="Seguimiento Integral de Procesos Jurídicos">
                        <p>Seguimiento Integral de Procesos Jurídicos</p>
                    </a>
                    <a href="./servicio.html" class="card2">
                        <img src="./assets/img/Garantias.mp4" alt="Garantía de Documentación Precisa y Completa">
                        <p>Garantía de Documentación Precisa y Completa</p>
                    </a>
                    <a href="./servicio.html" class="card2">
                        <img src="./assets/img/Organizacion.mp4" alt="Organización Eficiente de Expedientes">
                        <p>Organización Eficiente de Expedientes</p>
                    </a>
                    <a href="./servicio.html" class="card2">
                        <img src="./assets/img/Tramiración.mp4" alt="Tramitación de Citas y Formularios en Línea">
                        <p>Tramitación de Citas y Formularios en Línea</p>
                    </a>
                    <a href="./servicio.html" class="card2">
                        <img src="./assets/img/Asesoria.mp4" alt="Asesoría Legal Personalizada">
                        <p>Asesoría Legal Personalizada</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Aquii iria lo de los testimonios -->

        <section class="testimonials container">
            <h2 class="h2azul" style="text-align: center;">TESTIMONIOS</h2>

            <div class="owl-carousel owl-theme">
                <?php include 'F_funcion.php'; ?>
                <?php
                $sql = "SELECT nombre, testimonio, rating FROM testimonios ORDER BY fecha DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item testimonial-item">';
                        echo '<h5 class="testimonial-name">' . htmlspecialchars($row["nombre"]) . '</h5>';
                        echo '<div class="testimonial-stars">';
                        for ($i = 0; $i < $row["rating"]; $i++) {
                            echo '&#9733;'; // Estrella llena
                        }
                        for ($i = $row["rating"]; $i < 5; $i++) {
                            echo '&#9734;';
                        }
                        echo '</div>';
                        echo '<p class="testimonial-text">"' . htmlspecialchars($row["testimonio"]) . '"</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay testimonios disponibles.</p>';
                }
                ?>
            </div>

            <div class="testimonial-buttons" style="text-align: center; margin-top: 20px;">
                <button class="prev-btn owl-prev testimonial-btn" id="prevTestimonial">
                    <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 4.5L3 12m0 0l7.5 7.5M3 12h18" stroke-linejoin="round" stroke-linecap="round"></path>
                    </svg>
                    <span>Prev</span>
                </button>
                <button class="next-btn owl-next testimonial-btn" id="nextTestimonial">
                    <span>Next</span>
                    <svg width="15" height="15" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>

            <div class="testimonial-feedback" style="display: flex; justify-content: space-between; margin-top: 40px;">

                <div class="left-feedback">
                    <h3>¡DÉJANOS SABER TU OPINIÓN SOBRE NOSOTROS!</h3>
                </div>

                <div class="right-feedback">
                    <form id="testimonialForm" class="testimonial-form">
                        <div class="form-group name-group">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control name-input" placeholder="Tu nombre" required>
                        </div>
                        <div class="form-group testimonial-group">
                            <label for="testimonial" class="form-label">Testimonio</label>
                            <textarea id="testimonial" name="testimonial" class="form-control testimonial-input" rows="4" placeholder="Escribe tu testimonio" required></textarea>
                        </div>
                        <div class="form-group rating-group">
                            <h3 class="form-label rating-label">CALIFICACIÓN</h3>
                            <div class="star-rating">
                                <div class="stars">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                </div>
                                <input type="hidden" id="rating" name="rating" value="" required>
                            </div>
                        </div>
                        <div class="form-group submit-group">
                            <button type="submit" class="submit-btn" style="width: 100%;">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <section id="nuestra-fundadora" class="founder-section">
            <div class="container">
                <div class="card-wrapper">
                    <div class="card-text">
                        <h3>Tu guía hacia un nuevo comienzo</h3>
                        <p>
                            En Global Inmigration, estamos comprometidos con hacer de tu proceso migratorio una experiencia tranquila, segura y llena de oportunidades. Bajo la dirección de nuestra fundadora, María Alejandra Del Moral, hemos ayudado a innumerables personas a alcanzar sus sueños y construir un futuro en el país que desean.
                        </p>
                        <p>
                            ¿Qué esperas para comenzar ese viaje que siempre soñaste? Contáctanos y hagamos tus sueños realidad.
                        </p>
                        <br></br>
                        <a href="https://www.instagram.com/globalinmigration.2018/" class="btn-primary">COMENZAR</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer">
            <div id="contac">
                <h2>¡CONTÁCTANOS!</h2>
                <form action="#" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                    <label for="mensaje">Comentario:</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí" rows="5"></textarea>

                    <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="info">
                <img src="./assets/img/global-logo-blanco.png" alt="Global Inmigration" class="logob">
                <h4>Correo Electrónico: consultoria@globalinmigration.com.co</h4>
                <h4>Teléfono: +57-3223209458</h4>
                <h4>Dirección: Bogotá, Colombia</h4>

                <!-- Enlaces a redes sociales -->
                <a href="https://api.whatsapp.com/message/55MZQV6EBFD6B1?autoload=1&app_absent=0" target="_blank">
                    <img src="./assets/img/ws.png" alt="WhatsApp" class="ico">
                </a>
                <a href="https://www.facebook.com/globalinmigration" target="_blank">
                    <img src="./assets/img/fb.png" alt="Facebook" class="ico">
                </a>
                <a href="https://www.instagram.com/globalinmigration.2018/" target="_blank">
                    <img src="./assets/img/ig.png" alt="Instagram" class="ico">
                </a>
            </div>
        </section>


        <!-- Nueva sección con fondo blanco para el copyright -->
        <section id="footer-copyright">
            <div class="footer-content">
                <p>&copy; 2024 Global Inmigration. Todos los derechos reservados. <a href="https://www.instagram.com/graphics.its/" target="_blank">Diseñado por gRaPHic'S</a></p>
            </div>
        </section>

        <script>
        $(document).ready(function() {
            var owl = $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $("#prevTestimonial").click(function() {
                owl.trigger('prev.owl.carousel');
            });

            $("#nextTestimonial").click(function() {
                owl.trigger('next.owl.carousel');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            const ratingInput = document.getElementById('rating');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    let selectedRating = this.getAttribute('data-value');

                    ratingInput.value = selectedRating;

                    stars.forEach(s => s.classList.remove('selected'));

                    for (let i = 0; i < selectedRating; i++) {
                        stars[i].classList.add('selected');
                    }
                });
            });
        });

        $('#testimonialForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'F_testimonios.php',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        title: 'Testimonio enviado correctamente.',
                        icon: 'success',
                        confirmButtonText: '¡Gracias!',
                        confirmButtonColor: '#14325C',
                    });

                    var nombre = $('#name').val();
                    var testimonio = $('#testimonial').val();
                    var rating = $('#rating').val();

                    var stars = '';
                    for (var i = 0; i < rating; i++) {
                        stars += '&#9733;';
                    }
                    for (var i = rating; i < 5; i++) {
                        stars += '&#9734;';
                    }

                    var newTestimonial = `
                            <div class="item testimonial-item">
                                <h5 class="testimonial-name">` + nombre + `</h5>
                                <div class="testimonial-stars">` + stars + `</div>
                                <p class="testimonial-text">"` + testimonio + `"</p>
                            </div>
                        `;

                    $('.owl-carousel').trigger('add.owl.carousel', [$(newTestimonial)]).trigger('refresh.owl.carousel');

                    var items = $('.owl-carousel .item').length;
                    if (items < 3) {
                        for (var i = items; i < 3; i++) {
                            $('.owl-carousel').trigger('add.owl.carousel', [$(newTestimonial)]).trigger('refresh.owl.carousel');
                        }
                    }

                    $('#testimonialForm')[0].reset();
                    $('.star').removeClass('selected');
                },
                error: function() {
                    Swal.fire(
                        'Error',
                        'Hubo un problema al enviar tu testimonio.',
                        'error'
                    );
                }
            });
        });
    </script>

</body>

</html>