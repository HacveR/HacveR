
    <?php
       get_header();
    ?>
    <!-- profile picture, Linked in and social media links -->
    <section class="hacver-profile top-space">
        <div class="row ">
            <h1 class="hacver-profile-title text-center"> Hacver Profile title </h1>
        </div>
        <div class="row">
            <div class="description col ">
                <h2 class="text-center ">Detail title</h2>
                <!-- here will be some descrption -->
              
                <div class="text-center ">
                <!--  
                    <p class="">here will be some descriptions</p>
                    <p class="">here will be some descriptions</p>
                    <p class="">here will be some descriptions</p>
                    <p class="">here will be some descriptions</p>
                -->
                </div>
            </div>
            <div class="col ">
                <h2 class="text-center">profile title</h2>
                <div class="d-flex justify-content-center">
                    <img class="profile-image " src="<?php echo get_template_directory_uri()?>/assets/images/Profile-defoult-image.png" alt="profil-image" />
                </div>
            </div>
        </div>
    </section>
    
    <hr/>
    
    <section>
        
    <!-- some description about me and my passion -->
    <h1 class="text-center ">title escripton about me</h1>
        <div class="description">
        
<?php 
if(have_posts()){
    while (have_posts()){
        the_post();
        the_content();
    }
}

?>
        <!--  
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
            lorem ipsum at doloris et lorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris etlorem ipsum at doloris et.
          -->
        </div>
        
    </section>
   
    <hr/>
    
    <section>
        <h1 class="text-center ">latest projects title</h1>
        
        
         <!--  one of my latest projects  -->
         <div class="home-latest-projects">
            <h2><a href="#">project title</a></h2> 
            <div class="row">
                <img class="project-icon col-3" src="<?php echo get_template_directory_uri()?>/assets/images/folder_icon_256x256.png" alt="project-icon"/> 
                <p class="col-10 project-desc row">Short description about project. short description about project. Short description about project.Short description about project. 
                                short description about project. Short description about project. Short description about project. short description about project. Short description about project.
                
                <span class="col-8">technologies: html, css, php, sql</span> <span class="col-2">Author: Kamil l</span> <span class="col-2"> Date:2000/1/1</span></p>
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
                
                <span class="col-8">technologies: html, css, php, sql</span> <span class="col-2">Author: Kamil l</span> <span class="col-2"> Date:2000/1/1</span></p>
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
                
                <span class="col-8">technologies: html, css, php, sql</span> <span class="col-2">Author: Kamil l</span> <span class="col-2"> Date:2000/1/1</span></p>
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
                
                <span class="col-8">technologies: html, css, php, sql</span> <span class="col-2">Author: Kamil l</span> <span class="col-2"> Date:2000/1/1</span></p>
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
                
                <span class="col-8">technologies: html, css, php, sql</span> <span class="col-2">Author: Kamil l</span> <span class="col-2"> Date:2000/1/1</span></p>
            </div>
         </div>
         
         <hr>
        
         
         
    </section>
    
   

    <?php 
        get_footer();
    ?>

