<?php
/*
Template Name: PN Web Main
*/
add_action( 'wp_enqueue_scripts', 'pn_web_home_scripts' );
if ( have_posts() ) : while ( have_posts() ) : the_post();
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

        <a to="top" href="#top"><img width="559" height="36" 
        src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/img/logo.png" 
        alt="Paulsen & Nilsen"></a>
        
        <!-- Navigation -->
        <nav>
            <ul>
                <!-- Journal -->
                <li><a to="contact" href="#contact">Contact</a></li>
                <li><a to="profile" href="#profile">Profile</a></li>
                <li><a to="projects" href="#projects">Projects</a></li>
            </ul>
        </nav>
        
        <!-- Social -->
        <ul id="social">
            <li class="facebook"><a target="_blank" href="https://www.facebook.com/PaulsenNilsen"></a></li>
            <li class="instagram"><a target="_blank" href=""></a></li>
        </ul>
    </div>
    </header>
    
    <div id="top" class="container-fluid">
        <div class="row-fluid">
            <div class="span7" id="featured-house">
                <img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/galleries/house1/house1_filter.png">
                <div id="slogan_mobile">
                        <h1>Interior Architects</h1>
                        <p>A dedicated team. A dynamic and detailed approach. Distinctive interiors.</p>
                </div>
                <p>Private Residence - Interior <br>Oslo Norway</p>
            </div>
            
            <div id="close-content" class="span4">
                <div class="row-fluid">
                    <div class="span12" id="slogan">
                        <h1>Interior<br><span>Architects</span></h1>
                        <p>A dedicated team. A dynamic and detailed approach. Distinctive interiors.</p>
                    </div>
                </div>
                
                <div id="featured-house-description" class="row-fluid">
                    <div class="span12">
                        <h2>Private Residence<br>Oslo Norway</h2>
                        <p>Located on a waterfront property, this private residence was a successful collaboration between
                            Paulsen & Nilsen and the architectural firm Narud Stokke Wiig. Involving a full renovation
                            and an expansive extension, the planning of this home has allowed for a seamless experience
                            between generous entertaining areas and more intimate, relaxed family spaces.

                            Quality finishes, crisp detailing and a mix of international art and furniture contribute to
                            making this home unique in the Norwegian interior landscape.</p>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div id="projects" class="span12 new-section">
                        <h1>PROJECTS</h1>
                        <p>—
                        <br>Paulsen & Nilsen provide Interior Architectural services for residential, commercial and
                            hospitality projects. We cater for a diverse range of clients locally and internationally
                            from our office in Oslo, Norway.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row-fluid">
        
            <div class="offset2 span4 project" project-id="1">
                <a title="Private Residence, Oslo Norway" href="<?php echo get_permalink(); ?>example-project/">
                    <img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/galleries/house2/1.jpg">
                </a>
                <!--<div class="slides">
                    <ul class="rslides">
                        <li><img src="galleries/house2/1.jpg"></li>
                        <li><img src="galleries/house2/2.jpg"></li>
                        <li><img src="galleries/house2/3.jpg"></li>
                    </ul>
                </div>-->

                <h2>Private Residence<br>Oslo Norway</h2>
                <p>Traditional Norwegian architecture meets contemporary family living – this project was a privilege 
                    to work on. Originally drawn by architect  xxx, the proportions of the spaces in this house…..
                    
                    <br/><br/>
                    <a href="<?php echo get_permalink(); ?>example-project/">View Project</a>
                </p>
            </div>
            
            <div class="offset1 span4 project" project-id="2">
                <a title="Apartment, Oslo Norway" href="<?php echo get_permalink(); ?>example-project/">
                    <img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/galleries/house3/1.jpg">
                </a>
                <!--<div class="slides">
                    <ul class="rslides">
                        <li><img src="galleries/house3/1.jpg"></li>
                        <li><img src="galleries/house3/2.jpg"></li>
                        <li><img src="galleries/house3/3.jpg"></li>
                    </ul>
                </div>-->
                
                <h2>Apartment<br>Oslo Norway</h2>
                <p>More text here???
                    
                    <br/><br/>
                    <a href="projects/apartment-oslo-norway.html">View Project</a>
                </p>
            </div>
            
        </div>
        
        <div class="row-fluid" style="margin-bottom: 1%;">
            <div id="profile" class="offset7 span4 new-section">
                <h1>PROFILE</h1>
                <p>—</p>
                <p>Paulsen Interiør AS - established in 2009, has now become Paulsen & Nilsen AS. The company is owned
                    and managed by Interior Architects Mariann Paulsen and Kristine Nilsen. The studio is located in the
                    creative hub that is Josefines Gate 29, Oslo. The address is home to A. Hokholt Architects and
                    well-known furniture designer Andreas Engesvik.</p>
            </div>
        </div>
        
        <div id="profile-content" class="row-fluid">
            <div class="offset3 span5">
                <img src="<?php echo get_template_directory_uri(); ?>/pages/pn-web/img/profile.jpg">
            </div>
            
            <div class="span3">
                <h2>Mariann Paulsen & Kristine Nilsen</h2>
                <p>Text here ???</p>
            </div>
        </div>
        
        <div class="row-fluid" style="margin-bottom: 0.1%; margin-top: 10%;">
            <div id="contact" class="offset2 span3 new-section">
                <h1>CONTACT</h1>
                <p>—</p>
                <p>For general or customer enquiries</p>
            </div>
            
            <div class="offset1 span2 contact-card">
                <h2>Kristine Nilsen<br>—</h2>
                <p>+47 99 99 99 99
                <br><a href="mailto:">lorem@ipsum.com</a></p>
            </div>
            
            <div class="span2 contact-card">
                <h2>Mariann Paulsen<br>—</h2>
                <p>+47 99 99 99 99
                <br><a href="mailto:">dolor@sitamet.com</a></p>
            </div>
        </div>
        
        <div class="row-fluid mobile_bottom">
            <div id="office" class="offset2 span2">
                <h2>Office<br>—</h2>
                <p><strong>Adress</strong>
                <br>Incognito Street 27
                <br>1337, Oslo
                <br>Norway</p>
                
                <p><strong>Contact</strong>
                <br><a href="mailto:">consec@tetur.com</a>
                <br>+47 99 99 99 99</p>
            </div>
            
            <a target="_blank" href="http://goo.gl/maps/tUKp6">
            <div id="map_canvas" class="span6"></div>
            </a>

        </div>
        
    </div>
    
<?php wp_footer(); ?>
</body>
</html>

<?php endwhile; endif; ?>