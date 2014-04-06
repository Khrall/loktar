<?php add_action( 'wp_enqueue_scripts', 'front_page_scripts' ); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="description" content="Khrall's awesome website!">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <body <?php //wp_body(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    

    <div id="banner" class="page-content">
        <div class="wrapper">
            <img id="banner-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="My logo!" />
            <h1>Doctor Khrall <span>+</span></h1>
            <ul class="light">
                <li>This site is under construction, come back soon!</li>
            </ul>
        </div>

    </div>

    <div class="content-breaker"></div>

    <div id="about" class="page-content">
        <div class="wrapper">
            <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/img/self.png" />
            <h1 class="name">Raymi T. Eldby</h1>
            <p class="description light">Hi, I’m a program and web developer!<br/>I turn great ideas into solid products<br/>ready for deployment.</p>
            <ul class="social">
                <li class="social-icon github"></li>
                <li class="social-icon linkedin"></li>
            </ul>
        </div>
    </div>

    <div class="content-breaker"></div>

    <div id="portfolio" class="page-content">
        <div class="wrapper">
            <h1 class="intro-header">Portfolio</h1>
            <p class="intro-description">Take a look at some of my work!</p> 
            <div id="showcase">
                <ul class="profiles">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/conceptual.png" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/pn-web.png" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio.png" /></li>
                </ul>
                <ul class="descriptions">
                    <li project-id="0">
                        <h2 class="project-title">Event Connect</h2>
                        <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis felis, venenatis a fringilla ut, pretium et mi. Nullam laoreet viverra mauris id euismod. Maecenas vel aliquam urna, ac vehicula lacus. Cras congue porttitor gravida. Aliquam nec commodo nisi.</p>
                    </li>
                    <li project-id="1">
                        <h2 class="project-title">Paulsen & Nilsen Web</h2>
                        <p class="project-description">Vivamus ullamcorper ante sapien, sit amet vestibulum diam sodales in. Etiam laoreet varius leo ut gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In leo ligula, accumsan non tellus non, sodales lobortis lacus.</p>
                    </li>
                    <li project-id="2">
                        <h2 class="project-title">Web Portfolio</h2>
                        <p class="project-description">Vestibulum sed libero quis urna hendrerit vulputate. Phasellus sollicitudin orci id lectus hendrerit ultricies. Nulla vestibulum eros sed nunc ullamcorper, ut ullamcorper lorem volutpat. Cras luctus nisl ac elit aliquam, et vehicula dui ullamcorper. Integer sollicitudin.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        //var _gaq=[['_setAccount','UA-43080362-2'],['_trackPageview']];
        //(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        //g.src='//www.google-analytics.com/ga.js';
        //s.parentNode.insertBefore(g,s)}(document,'script'));

        var themeURL = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <?php wp_footer(); ?>
    </body>
</html>
