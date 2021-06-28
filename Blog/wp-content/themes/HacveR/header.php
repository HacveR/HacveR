

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
            wp_head();
        ?>
        <!--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="./assets/styles/hacver_style_title.css" rel="stylesheet">
        -->
        
</head>
<body>
    <header class="fixed-top hacver-header">
        <!-- Here will be main navigation -->
        <nav>
            <?php 
            if(function_exists('the_custom_logo')){
                $custom_logo_id =get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
               }
            ?>
               
               		 <img width="64px" height="64px" class="nav-logo" src="<?php echo $logo[0]; ?>" alt="logo "/>
           
           <?php 
            
            $menu_items = wp_get_nav_menu_items( 'main-menu' );
            $this_item = current( wp_filter_object_list( $menu_items, array( 'object_id' => get_queried_object_id() ) ) );
         
            
            wp_nav_menu(
                
                array(
                    'menu'=>'primary',
                    'container'=>'',
                    'theme_location'=>'primary',
                    'menu_class' => '',
                    'items_wrap'=>'<ul id=" " class=" ">%3$s</ul>',
                    'walker' => new Walker_Nav_Primary(),
          
            )
                );
        ?>
           <!--  
             <ul >
                 <li><a href="#" ><img src="<?php echo get_template_directory_uri()?>/assets/images/powerbit_menu_icon_64x64.png"/><p>Blog</p></a> </li> 
	                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/about_menu_icon_64x64.png "/><p>About</p></a> </li> 
	                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/project_menu_icon_64x64.png "/><p>Projects</p></a> </li> 
	                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/contact_menu_icon_64x64.png "/><p>Contact</p></a> </li> 
	     </ul>
	     -->
        </nav>
      
    </header>