<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#4f8713">
    <meta name="msapplication-TileColor" content="#4f8713">
    <meta name="theme-color" content="#4f8713">

	<?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">
</head>
<body>
    <div id="backdrop"></div>
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a class="anchor" id="btn-logo" href="<?php echo esc_url( home_url() ); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Logo de VitalHealth">
            </a>
            <nav>
                <ul class="list-unstyled text-uppercase">
                    <li>
                        <a class="anchor" id="btn-nav-1" href="#jumbotron">Home</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-2" href="#que-es-vitalhealth">Compañía</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-3" href="#nuestros-productos">Productos</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-4" href="#oportunidad-de-crecimiento-top">Oportunidad</a>
                    </li>
                    <li>
                        <a class="anchor" id="btn-nav-5" href="<?php echo esc_url( get_permalink( 5 ) ); ?>">Tienda</a>
                    </li>
                </ul>
            </nav>
            <a href="#contacto" class="anchor btn btn-primary" id="btn-contacto">Contáctanos</a>
            <div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="contacto-menu">
                <ul class="list-unstyled">
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="mailto:contacto@vitalhealthglobal.com">
                            contacto@vitalhealthglobal.com
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+526624550504">
                            +52 (662) 455 0504
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-2 my-auto">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="" class="logo img-fluid" id="logo-navbar">
                    </a>
                </div>
                <div class="col-md-8 text-center my-auto d-none d-md-block">
                    <nav>
                        <ul class="list-inline text-uppercase">
                            <li class="list-inline-item">
                                <a class="anchor" href="#jumbotron">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="#que-es-vitalhealth">Compañía</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="#nuestros-productos">Productos</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="#oportunidad-de-crecimiento-top">Oportunidad</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="<?php echo esc_url( get_permalink( 5 ) ); ?>">Tienda</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="#contacto">Contáctanos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-md-2 my-auto text-end">
                    <ul class="list-inline text-uppercase mb-0">
                        <li class="list-inline-item">
                            <a href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
                            <?php if ( is_user_logged_in() ): ?>
                                <i id="cuenta" class="fa-solid fa-user"></i> <span class="d-none d-lg-inline-block">Mi cuenta</span>
                            <?php else: ?>
                                <i id="cuenta" class="fa-solid fa-user"></i> <span class="d-none d-lg-inline-block">Acceder</span>
                            <?php endif; ?>
                            </a>
                        </li>
                    <?php 
                        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
                        $count = WC()->cart->cart_contents_count;
                    ?>
                        <li class="list-inline-item">
                        <?php if ( $count > 0 ) : ?>
                            <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Carrito' ); ?>">
                                <i id="shopping-cart" class="fa-solid fa-cart-shopping"></i> <span class="d-none d-lg-inline-block">Carrito</span> (<span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>)
                            </a>
                        <?php endif; ?>
                        </li>
                    <?php endif; ?>
                        <li class="list-inline-item d-md-none">
                            <a id="mburger" href="javascript:void(0)">
                                <i class="fas fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section id="jumbotron">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h1 class="mb-4">Comienza a cambiar tu vida con VitalHealth</h1>
                    <a class="btn btn-outline-primary btn-lg">Conoce más productos</a>
                </div>
            </div>
        </div>
    </section>
