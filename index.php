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
    

    <div id="banner"><div class="wrapper">
      
      <div id="banner-content">
        <img id="banner-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="My logo!" />
        <h1>Doctor Khrall <span>+</span></h1>
        <ul>
          <li>This site is under construction, come back soon!</li>
        </ul>
      </div>

    </div></div>

    <script>
        var _gaq=[['_setAccount','UA-43080362-2'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <?php wp_footer(); ?>
    </body>
</html>
