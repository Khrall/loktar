<?php
/*
Template Name: PN Web Project
*/
add_action( 'wp_enqueue_scripts', 'pn_web_project_scripts' );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Paulsen & Nilsen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <?php wp_head(); ?>
</head>
<body>

    <header>
    <div class="wrapper">
    
        <!-- Logo -->
        <a to="top" href="<?php echo get_permalink(); ?>../#top"><img width="559" height="36" 
        src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/img/logo.png"
        alt="Paulsen & Nilsen"></a>
        
        <!-- Navigation -->
        <nav>
            <ul>
                <!-- Journal -->
                <li><a to="contact" href="<?php echo get_permalink(); ?>../#contact">Contact</a></li>
                <li><a to="profile" href="<?php echo get_permalink(); ?>../#profile">Profile</a></li>
                <li><a to="projects" href="<?php echo get_permalink(); ?>../#projects">Projects</a></li>
            </ul>
        </nav>
        
        <!-- Social -->
        <ul id="social">
            <li class="facebook"><a target="_blank" href="https://www.facebook.com/PaulsenNilsen"></a></li>
            <li class="instagram"><a target="_blank" href=""></a></li>
        </ul>
    </div>
    </header>

    <!-- Main Content -->
    <div id="project-content" class="container-fluid">
        <div class="row-fluid slideshow_holder">
            <div class="span2 nav_holder prev"></div>
            <div class="span8">
                
                <!-- Slideshow -->
                <div class="slideshow">
                    <ul class="rslides">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/galleries/house3/1.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/galleries/house3/2.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/galleries/house3/3.jpg"></li>
                    </ul>
                </div>

            </div>
            <div class="span2 nav_holder next"></div>
        </div>

        <div class="row-fluid">
            <!-- Project Details -->
            <div class="offset3 span6">
                <h1>Apartment, Oslo Norway</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at velit est. Phasellus et mauris sed ante bibendum adipiscing. Vestibulum nec nisl eget neque rutrum feugiat. In fermentum nisi tortor, eu molestie turpis elementum vitae.</p>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>