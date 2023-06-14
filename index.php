<?php get_header(); ?>

    <section id="jumbotron">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h1 class="mb-4">Comienza a cambiar tu vida con VitalHealth</h1>
                    <a class="btn btn-outline-primary btn-lg anchor" href="#nuestros-productos">Conoce más productos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="descanso-vegetales">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bg-descanso-vegetales.jpg" alt="" class="img-fluid bg-descanso-vegetales">
    </section>

    <section id="nuestros-productos" class="py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="text-uppercase">Nuestros productos te ayudan con:</h1>
                </div>
            </div>
            <div class="row mb-5">
            <?php 
    $args = array(
    'style'      => 'list',
    'hide_empty' => 1,
    );
    wp_list_categories($args); 
?>
                <div class="col-6 col-md-4">
                    <div class="boton boton-1">
                        <a href="<?php echo get_category_link( 16 ); ?>"></a>
                        <div class="overlay">
                            <h3>Nutrición de cuerpo completo</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="boton boton-2">
                        <a href="<?php echo get_category_link( 17 ); ?>"></a>
                        <div class="overlay">
                            <h3>Control de peso</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="boton boton-3">
                        <a href="<?php echo get_category_link( 18 ); ?>"></a>
                        <div class="overlay">
                            <h3>Energía y ejercicio</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="boton boton-4">
                        <a href="<?php echo get_category_link( 19 ); ?>"></a>
                        <div class="overlay">
                            <h3>Cabello y cuidado de la piel</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="boton boton-5">
                        <a href="<?php echo get_category_link( 20 ); ?>"></a>
                        <div class="overlay">
                            <h3>Desintoxicación</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="boton boton-6">
                        <a href="<?php echo get_category_link( 21 ); ?>"></a>
                        <div class="overlay">
                            <h3>Sistema inmune</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a class="btn btn-outline-primary btn-lg" href="<?php echo esc_url( get_permalink( 5 ) ); ?>">Ver todos los productos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="los-mas-vendidos" class="py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h1 class="text-uppercase">Los más vendidos</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col">
                    <!-- Slider main container -->
                    <div class="swiper-los-mas-vendidos">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-10">
                                        <div class="elemento">
                                            <div class="contenido">
                                                <h2>V-Collagen</h2>
                                                <p>El colágeno es una proteína que contribuye a que nuestra piel se mantenga hidratada y protegida frente agentes externos</p>
                                                <a href="<?php echo esc_url( get_permalink( 51 ) ); ?>" class="btn btn-outline-primary rounded-pill">
                                                    Ver más
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-10">
                                        <div class="elemento">
                                            <div class="contenido">
                                                <h2>V-Itadol</h2>
                                                <p>Con el paso del tiempo y la edad, nuestro organismo comienza a presenter ciertos cambios como el desgaste en las articulaciones</p>
                                                <a href="<?php echo esc_url( get_permalink( 53 ) ); ?>" class="btn btn-outline-primary rounded-pill">
                                                    Ver más
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-10">
                                        <div class="elemento">
                                            <div class="contenido">
                                                <h2>V-Italboost</h2>
                                                <p>V-Italboost ayudará a fortalecer tu sistema inmune gracias a la mezcla óptima de vitaminas e ingredientes como la equinácea y el fenogreco</p>
                                                <a href="<?php echo esc_url( get_permalink( 67 ) ); ?>" class="btn btn-outline-primary rounded-pill">
                                                    Ver más
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a class="btn btn-outline-primary btn-lg" href="<?php echo esc_url( get_permalink( 5 ) ); ?>">Ver todos los productos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="que-es-vitalhealth" class="py-60">
        <div class="triangulo"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 my-auto order-lg-2">
                    <h1 class="text-uppercase">¿Qué es</h1>
                    <h2 class="text-uppercase mb-4">VitalHealth?</h2>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/que-es-vitalhealth/ico-1.svg" alt="" class="img-fluid">
                    <p>Nuestros fundadores cuentan con una amplia trayectoria en la industria de la salud y de negocios.</p>
                </div>
                <div class="col-12 col-lg-4 my-auto order-lg-3">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/que-es-vitalhealth/ico-2.svg" alt="" class="img-fluid">
                    <p>Nuestras oficinas corporativas cuentan con un equipo gerencial preparado para el crecimiento exponencial.</p>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/que-es-vitalhealth/ico-3.svg" alt="" class="img-fluid">
                    <p>Contamos con un sistema educativo que te permitirá aprender cómo desarrollar tu negocio, desde el afiliado más nuevo hasta los más capacitados.</p>
                </div>
                <div class="col-12 col-lg-4 my-auto order-lg-1">
                    <div class="fondo-verde">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/que-es-vitalhealth/ico-4.svg" alt="" class="img-fluid">
                        <p class="texto-blanco">Somos una empresa libre de deudas.</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/que-es-vitalhealth/ico-5.svg" alt="" class="img-fluid">
                        <p class="texto-blanco">Fabricamos nuestros propios productos, eliminando gastos intermediarios.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nuestros-valores" class="fondo-blanco py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h1 class="text-uppercase">
                        Nuestros<br>
                        valores
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-purple text-uppercase">El afiliado es nuestra prioridad</h5>
                    <p>Nuestro negocio está basado en facilitar al afiliado con todo lo necesario para lograr el éxito que busca.</p>
                    <p>Desde un plan de compensación muy generoso, que recompensa a todos los involucrados, hasta las herramientas de desarrollo empresarial y el apoyo corporativo de una empresa que sabe lo que es ser un afiliado.</p>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-purple text-uppercase">Productos que funcionan</h5>
                    <p>Nuestro compromiso es fabricar productos utilizando ingredientes de la más alta calidad, obteniéndolos de diferentes partes del mundo, con formulaciones que llevan años de estudio.</p>
                    <p>Los productos han sido probados fuera de redes de mercadeo en miles de clientes, mostrando una alta efectividad.</p>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-purple text-uppercase">El afiliado es nuestra prioridad</h5>
                    <p>Hemos fusionado los 3 tipos de planes de compensación más utilizados en redes de mercadeo, creando una sinergia donde se aprovechan las bondades de cada plan y se elimina lo que no ayuda a nuestros afiliados.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="fabricacion-vitalhealth" class="fondo-blanco py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-1 my-auto">
                    <h1>Fabricación VitalHealth</h1>
                    <p>Todos los productos Vital Health Global se producen en instalaciones propias que cuentan con más de 1000 m² acondicionados con tecnología de punta para la fabricación, embotellamiento y empaque de tus productos.</p>
                </div>
                <div class="col-12 col-lg-7 my-auto">
                    <div class="row">
                        <div class="col-12">
                            <p>Nuestro laboratorio cuenta con registro ante COFEPRIS y FDA, cumpliendo con amplias certificaciones como es la clasificación GMP (Good Manufacturing Practices - Buenas Prácticas de Manufactura), así como también, con un equipo de médicos, químicos y formuladores con años de experiencia.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 position-relative">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-planta.svg" alt="" class="img-fluid mb-3">
                            <p>Nuestros ingredientes y mecanismos satisfacen todos los estándares internacionales de calidad y seguridad.</p>
                        </div>
                        <div class="col-12 col-lg-6 position-relative">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-planta.svg" alt="" class="img-fluid mb-3">
                            <p>Controlamos todo el proceso de fabricación, desde la formulación hasta envío a cliente final.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certificaciones" class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-uppercase">Certificaciones</h1>
                </div>
                <div class="col-12 col-lg-10 offset-lg-1">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/certificaciones.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="oportunidad-de-crecimiento-top" class="fondo-blanco">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bg-oportunidad-de-crecimiento.png" alt="" class="img-fluid bg-oportunidad-de-crecimiento">
        <div class="titulo">
            <h1 class="text-uppercase">
                Oportunidad de crecimiento
            </h1>
        </div>
    </section>

    <section id="oportunidad-de-crecimiento-bottom" class="py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-10">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2>Etapas de crecimiento en una empresa de <span class="text-uppercase">red de mercadeo</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 my-auto text-center">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/etapas-de-crecimiento.svg" alt="" class="img-fluid mb-4 mb-lg-0">
                        </div>
                        <div class="col-12 col-lg-6 my-auto">
                            <h5 class="text-purple text-uppercase">En redes de mercadeo hay distintas fases de crecimiento de una empresa multinivel</h5>
                            <p>Vital Health inició operaciones el Primero de Febrero del 2022. Todos los afiliados que decidan ser parte de nuestra empresa tienen la oportunidad de ser parte de una empresa al inicio, pero con una solidez inigualable.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6 my-auto text-center">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solidez.svg" alt="" class="img-fluid">
                            <h2 class="mb-4 mb-lg-0">Solidez</h2>
                        </div>
                        <div class="col-12 col-lg-6 my-auto">
                            <h5 class="text-purple text-uppercase">¿Por qué decidir ser parte de VitalHealth?</h5>
                            <p>Nuestro equipo corporativo tiene más de 50 años de experiencia en venta directa.</p>
                            <p>Laboratorio propio con doctores, científicos, químicos y formuladores con años de experiencia y registros ante cofepris y FDA.</p>
                            <p>Productos innovadores con miles de testimonios con la posibilidad de seguir creciendo nuestro catálago.</p>
                            <p>Instalaciones propias de Vital Health.</p>
                            <p>Software empresarial con tecnología en la nube para minimizar costos.</p>
                            <p>Servicio al cliente de primera clase.</p>
                            <p>Plan de recompensas que paga hasta el 80% de puntos de volumen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
