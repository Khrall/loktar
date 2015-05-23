<?php 
add_action( 'wp_enqueue_scripts', 'front_page_scripts' ); 
?>
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
                <li>Yo, welcome to my portofolio! There's content below!</li>
            </ul>
        </div>

    </div>

    <div class="content-breaker"></div>

    <div id="about" class="page-content">
        <div class="wrapper">
            <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/img/self.png" />
            <h1 class="name">Raymi T. Eldby</h1>
            <p class="description light">Hi, my name is Raymi. I am a student at NTNU with a passion for application development and design.</p>
            <ul class="social">
                <a href="https://github.com/Khrall/" title="Khrall @GitHub" target="_blank"><li class="social-icon github"></li></a>
                <a href="http://www.linkedin.com/profile/view?id=299445779" title="Raymi T. Eldby @LinkedIn" target="_blank"><li class="social-icon linkedin"></li></a>
            </ul>
        </div>
    </div>

    <div class="content-breaker"></div>

    <div id="portfolio" class="page-content">
        
        <div class="wrapper">

            <div class="row">
                <h1>Portfolio</h1>
            </div>

            <div class="row">
                <div class="col-md-4 project">
                    <div class="project-profile">
                        <div class="inner">
                            <a href="http://www.readvio.com/">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/vio_480.png" />
                                <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/img/480_overlay.png" />
                            </a>
                        </div>
                    </div>
                    <h2 class="project-title">Vio</h2>
                    <p class="project-description">Vio gathers Norwegian quality journalism on one place by unbundling content from news papers and magazines.</p>
                    <p><a href="http://www.readvio.com/blogg/">Go to ReadVio</a></p>
                </div>

                <div class="col-md-4 project">
                    <div class="project-profile">
                        <div class="inner">
                            <a href="<?php echo home_url(); ?>/apps/abakaffe/">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/abakaffe_480.png" />
                                <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/img/480_overlay.png" />
                            </a>
                        </div>
                    </div>
                    <h2 class="project-title">Abakaffe</h2>
                    <p class="project-description">Abakaffe is a small Android Application accomplishing the small task of providing information about the student orgnization's coffemaker.</p>
                    <p><a href="<?php echo home_url(); ?>/apps/abakaffe/">Go to project website</a></p>
                </div>
                
                <div class="col-md-4 project">
                    <div class="project-profile">
                        <div class="inner">
                            <a href="<?php echo home_url(); ?>/apps/ktn-elm-chat/">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ktnelmchat_480.png" />
                                <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/img/480_overlay.png" />
                            </a>
                        </div>
                    </div>
                    <h2 class="project-title">KTN ELM Chat</h2>
                    <p class="project-description">KTN ELM Chat is a chat developed by students at NTNU. It is based on Java, but uses SocketIO to communicate with any modern web browser.</p>
                    <p><a href="<?php echo home_url(); ?>/apps/ktn-elm-chat/">Go to project website</a></p>
                </div>
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