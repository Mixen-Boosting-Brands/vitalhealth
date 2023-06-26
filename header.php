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
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/safari-pinned-tab.svg" color="#4f8713">
    <meta name="msapplication-TileColor" content="#4f8713">
    <meta name="theme-color" content="#4f8713">

	<?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css?ver=<?php echo rand(111,999)?>">
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
                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-1" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#jumbotron">Home</a>
                    </li>
                    <li>
                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-2" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#que-es-vitalhealth">Compañía</a>
                    </li>
                    <li>
                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-3" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nuestros-productos">Productos</a>
                    </li>
                    <li>
                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-4" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#oportunidad-de-crecimiento-top">Oportunidad</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_permalink( 5 ) ); ?>">Tienda</a>
                    </li>
                </ul>
            </nav>
            <a href="#contacto" class="anchor btn btn-primary" id="btn-contacto">Contáctanos</a>
            <div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/vitalhealthcuu/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/profile.php?id=100088512334342&mibextid=ZbWKwL" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.tiktok.com/@vitalhealthcuu" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
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
                        <a href="tel:+526142457665">
                            +52 (614) 245 7665
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar" <?php if( !is_home() ): ?>class="navbar-interna"<?php endif; ?>>
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
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#jumbotron">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#que-es-vitalhealth">Compañía</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nuestros-productos">Productos</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#oportunidad-de-crecimiento-top">Oportunidad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo esc_url( get_permalink( 5 ) ); ?>">Tienda</a>
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