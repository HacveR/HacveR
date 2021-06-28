
    <?php
       get_header();
    ?>
    <!-- profile picture, Linked in and social media links -->
    <section class="hacver-profile top-space">
        <div class="row ">
            <h1 class="hacver-profile-title text-center"> Hacver Profile title </h1>
        </div>
        <div class="row">
     
            <div class="description col-6 ">
            <!--  here will be some links about me -->
        <?php 
            $queryCondition = array(
                "post-type"     =>  "post",
                "category_name" =>  "portfolio-links",
                "tag"           =>  "bio, about me"
            );
            
            $theQuery = new WP_Query($queryCondition);
            
            if($theQuery->have_posts()){
                while ($theQuery->have_posts()) {
                    $theQuery->the_post();
                    
                    echo '<h2 class=" text-center ">'.get_the_title().'</h2>';
                    echo '<div class="text-center ">';
                    echo get_the_content();
                    echo '</div>';
                }
            }
        ?>
            </div>
            <div class="col-6 ">
            <!-- here will be  profile picture -->
     	<?php 
            $queryCondition = array(
                "post-type"     =>  "post",
                "category_name" =>  "portfolio-picture",
                "tag"           =>  "bio, about me"
            );
            
            $theQuery = new WP_Query($queryCondition);
            
            if($theQuery->have_posts()){
                while ($theQuery->have_posts()) {
                    $theQuery->the_post();
                    
                    echo '<h2 class=" text-center ">'.get_the_title().'</h2>';
                    echo '<div class="text-center ">';
                    echo get_the_content();
                    echo '</div>';
                }
            }
        ?>
         
        </div>
        </div>
    </section>
    
    <hr/>
    
    <section>
        
    <!-- some description about me and my passion -->
    <?php 
        $queryCondition = array(
            "post-type"     =>  "post",
            "category_name" =>  "interest",
            "tag"           =>  "bio, about me"
        );
        
        $theQuery = new WP_Query($queryCondition);
        
        if($theQuery->have_posts()){
            while ($theQuery->have_posts()) {
                $theQuery->the_post();
                echo '<h2>'.get_the_title().'</h2>';
                echo '<div class= "description">';
                echo get_the_content();
                echo '</div>';
            }
            
        }
    ?>   
    </section>
   
    <hr/>
    
    <section>
    
    
        <h1 class="text-center ">latest projects title</h1>
        
         <!--  one of my latest projects  -->
         <div class="home-latest-projects">
                <?php 
                    $queryCondition2 = array(
                        "post_type"     =>  "project",
                        "post_status"     =>  "publish",
                        "posts_per_page"=> 5
                    );
                    
                    $theQuery2 = new WP_Query($queryCondition2);
                    
                  
                    if($theQuery2->have_posts()){
                        while ($theQuery2->have_posts()) {
                            $theQuery2->the_post();
                            echo '<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
                            echo '<div class="row">';
                            echo '<img class="project-icon col-3" src="'.get_template_directory_uri().'/assets/images/folder_icon_256x256.png" alt="project-icon"/> ';
                            echo '<p class="col-10 project-desc row">';
                            echo wp_trim_words( get_the_content(), 120, '' );
                            echo '<span class=" col-9 span-cat">technologies: '.get_the_tag_list(' ',', ','',null,).'</span> <span class=" col-3 span-cat"> Author: '.get_the_author().' </span>';
                            echo '<span class=" col-9 span-cat"></span><span class="col-3 span-cat"> Date: '. get_the_date('d/M/y').'</span></p>';
                            echo '</div>';
                        }
                    }
                ?>   
                
                
         </div>
         
         <hr>
          <!--  one of my latest projects  -->
         <div class="home-latest-projects">
            <h2><a href="#">project title</a></h2> 
            <div class="row">
                <img class="project-icon col-3" src="<?php echo get_template_directory_uri()?>/assets/images/folder_icon_256x256.png" alt="project-icon"/> 
                <p class="col-10 project-desc row">Short description about project. short description about project. Short description about project.Short description about project. 
                                short description about project. Short description about project. Short description about project. short description about project. Short description about project.
                
                <span class="col-8 span-cat">technologies: html, css, php, sql</span> <span class="col-2 span-cat">Author: Kamil l</span> <span class="col-2 span-cat"> Date:2000/1/1</span></p>
            </div>
         </div>
         
         <hr>
         
          <!--  one of my latest projects  -->
         <div class="home-latest-projects">
            <h2><a href="#">project title</a></h2> 
            <div class="row">
                <img class="project-icon col-3" src="<?php echo get_template_directory_uri()?>/assets/images/folder_icon_256x256.png" alt="project-icon"/> 
                <p class="col-10 project-desc row">Short description about project. short description about project. Short description about project.Short description about project. 
                                short description about project. Short description about project. Short description about project. short description about project. Short description about project.
                
                <span class="col-8 span-cat">technologies: html, css, php, sql</span> <span class="col-2 span-cat">Author: Kamil l</span> <span class="col-2 span-cat"> Date:2000/1/1</span></p>
            </div>
         </div>
         
         <hr>
         
          <!--  one of my latest projects  -->
         <div class="home-latest-projects">
            <h2><a href="#">project title</a></h2> 
            <div class="row">
                <img class="project-icon col-3" src="<?php echo get_template_directory_uri()?>/assets/images/folder_icon_256x256.png" alt="project-icon"/> 
                <p class="col-10 project-desc row">Short description about project. short description about project. Short description about project.Short description about project. 
                                short description about project. Short description about project. Short description about project. short description about project. Short description about project.
                
                <span class="col-8 span-cat">technologies: html, css, php, sql</span> <span class="col-2 span-cat">Author: Kamil l</span> <span class="col-2 span-cat"> Date:2000/1/1</span></p>
            </div>
         </div>
         
         <hr>
         
         
    </section>
    
   

    <?php 
        get_footer();
    ?>

