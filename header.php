<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://darrellroberts.com">    
    <link rel="shortcut icon" href="/wp-content/themes/customTheme/assets/images/logo.svg"> 
    
    <?php
    wp_head();
    ?>

</head> 

<body>
    
    <header class="headerContainer">
        <div class="logoContainer">	    
	        <a class="site-title" href="/"><?php echo get_bloginfo('name'); ?></a>
            <?php
		    		if(function_exists('the_custom_logo')){
		    			$custom_logo_id = get_theme_mod('custom_logo');
		    			$logo = wp_get_attachment_image_src($custom_logo_id);
		    		}
		    		?>
            <a href="/">
            <img class="logo" src="<?php echo isset($logo[0]) ? $logo[0] : get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="logo" width="75">
            </a>
        </div>
	    <nav class="navbarContainer" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>				
                <?php
                
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navlistContainer">%3$s</ul>'
                        )
                    );
                ?>

				<hr>
				
				<?php
					// dynamic_sidebar('sidebar-1');
				?> 
			</div>
		</nav>
    </header>
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>