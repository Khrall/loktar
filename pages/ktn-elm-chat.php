<?php
/*
Template Name: KTN ELM Chat
*/
add_action( 'wp_enqueue_scripts', 'ktn_elm_chat_scripts' );
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
    
    <div id="banner"></div>
    <div id="wrapper">
        
    <h1 id="title">KTN ELM Chat</h1>

    <div id="chat">
        <div class="container nano">
            <div class="nano-content">
                <ul>
                    <!--<li username="system" userid="0"><span class="name">System:</span>Attempting to connect to server, please wait ...</li>-->
                </ul>
            </div>
        </div>
        <form class="input">
            <input />
            <button><span>OK</span></button>
            <span class="detail"></span>
        </form>
    </div>

    <div id="about">
        <h1>What is this?</h1>
        <div class="horizontal-line"></div>

        <p>KTN ELM Chat is a chat developed by students at NTNU. It  is based on Java, but uses SocketIO to communicate with any modern web browser.</p>
        <p>Check out the documentation on <a title="ELM Chat @GitHub" target="_blank" href="https://github.com/larseen/KTN-ELM-CHAT">GitHub</a>!</p>
    </div>

    <div id="how-to">
        <h1>How do I use this?</h1>
        <div class="horizontal-line"></div>

        <p>Here's a list of commands available in the chat:</p>
        <ul>
            <li><b>[message]</b>Attempts to send a message to the chat</li>
            <li><b>/login [name]</b>Attempts to login with the desired username</li>
            <li><b>/logout</b>Attempts to log out from the chat</li>
            <li><b>/setServer [IP]</b>Attempts to change the server to the given IP</li>
            <li><b>/holdOn</b>Stops the chat from automatically scrolling</li>
            <li><b>/holdOff</b>Reenables the chat's automatic scrolling</li>
        </ul>
    </div>

    <div id="underneath">
        <h1>So how does it work?</h1>
        <div class="horizontal-line"></div>

        <p>Initially, the chat was designed to be purely Java, with a custom protocol implementation. However, we saw the opportunity through a Java implementation of the <a target="_blank" title="SocketIO" href="http://socket.io/">SocketIO</a> server, called <a target="_blank" href="https://github.com/mrniko/netty-socketio" title="Netty-socketio @GitHub">Netty-socketio</a>, to have the chat client implemented in a browser.</p>
        <p>A server can be hosted by anyone, by downloading the server .jar-file on GitHub, the one used on this site is hosted by me! Any client can connect to any server through the <b>/setServer</b> command, or upon initiation from the client .jar-file.</p>
        <p>In-depth documentation and explanation can be found in <a title="ELM Chat @GitHub" target="_blank" href="https://github.com/larseen/KTN-ELM-CHAT">our repo</a> on GitHub.</p>
    </div>

    <div id="credit">
        <h1>Can I reuse this?</h1>
        <div class="horizontal-line"></div>
        <p>This content belongs to <a href="<?php echo get_site_url(); ?>" title="Khrall @elddev.com" target="_blank">Khrall</a>, but you are free to use any of its contents free of charge and without mentioning either of the content's <a target="_blank" title="Contributors to KTN ELM Chat" href="https://github.com/larseen/KTN-ELM-CHAT#contributors">authors</a>.</p>
    </div>

    <div id="white-space"></div>

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