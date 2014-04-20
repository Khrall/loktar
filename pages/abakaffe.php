<?php
/*
Template Name: Abakaffe
*/
add_action( 'wp_enqueue_scripts', 'abakaffe_scripts' );
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
    
    <div id="top">
        <div class="wrapper">
            <header>
                <span></span><h1>Abakaffe</h1>
                <a title="Abakaffe on GitHub" target="_blank" id="github" href="https://github.com/ftlno/abakaffe-android"></a>
                <a title="Abakaffe on Google Play" target="_blank" id="android" href="https://play.google.com/store/apps/details?id=no.ftl.abakaffe"></a>
            </header>
            <div id="description" class="box">
                <h1>Hva er Abakaffe?</h1>
                <p>Abakaffe er en applikasjon til Android som forteller deg to enkle ting: om kaffetrakteren er satt på, og tidspunktet den sist ble satt på.</p>
            </div>
        </div>
    </div>

    <img id="phone" src="<?php echo get_template_directory_uri(); ?>/pages/abakaffe/phone.png" />

    <div class="wrapper">
        <div id="who-made-it" class="box">
            <h1>Hvem laget app'en?</h1>
            <p>Abakaffe for Android bygger på et <a target="_blank" href="http://kaffe.abakus.no/">API</a> av Webkom i Abakus på NTNU. Applikasjonen er designet og implementert av <a target="_blank" title="ftlno@github" href="https://github.com/ftlno">ftlno</a>, <a target="_blank" title="martinhath@github" href="https://github.com/martinhath">martinhath</a> og <a target="_blank" title="khrall@github" href="https://github.com/khrall">Khrall</a>.</p>
        </div>
    </div>

    <footer>
        <div class="wrapper">
            © 2014 <a title="Eldby Development" target="_blank" href="http://elddev.com/">Eldby Development</a>
        </div>
    </footer>

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