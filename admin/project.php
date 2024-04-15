<!DOCTYPE html>
    <html lang="en">
    <?php
    include "include/header.php";
    ?>
    <body>
        <!--==================== HEADER ====================-->
        <!-- Header -->
        <?php
        include "include/menu.php";
        ?>



        <!--==================== MAIN ====================-->
        <main class="main">
            <!-- Side Nav Dummy-->
            <div class="main__sideNav"></div>
            <!-- End Side Nav -->
            <!-- Main Content -->
            <div class="main__content">
                <!-- ==================-->
                <!-- Overview Page -->
               
                

            <!--==================== PROJECTS ====================-->
            <section class="projects section" id="projects">
                <div class="skills_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Projects </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New Project
                            </div>
                        </div> 
                    </div>

                    <div class="table">

                        <div class="table_filter">
                            <span class="table_filter-Btn ">
                                <i class="fas fa-ellipsis-h"></i>
                            </span>
                            <div>
                                <ul class="table_filter-list">
                                    <li>
                                        <p class="table_filter-link table_filter-link--active">
                                            All
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
            
                        <div class="table_search">
                            <div class="table_search-wrapper">
                                <select class="table_search-select" name="" id="">
                                    <option value="">Filter</option>
                                </select>
                            </div>
                            <div class="relative">
                                <i class="table_search-input--icon fas fa-search "></i>
                                <input class="table_search--input" type="text" placeholder="Search Project">
                            </div>
                        </div>
            
                        <div class="project_table-heading">
                            <p>Image</p> 
                            <p>Title</p>
                            <p>Description</p>
                            <p>Link</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <?php
                        include "include/connection.php";
                        // session_start();
                        $sel=mysqli_query($con, "SELECT * FROM project");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                        <div class="project_table-items">
                            <p>
                                <img src="uploads/<?php echo $rows['image'] ?>" alt="" class="project_img-list">
                            </p>
                            <p><?php echo $rows['Title'] ?></p>
                            <p><?php echo $rows['Description'] ?></p>
                            <p><?php echo $rows['Link'] ?></p>
                            <div>
                                <button class="btn-icon success">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn-icon danger" >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <?php
                            }
                        }else{
                            echo "Data Not Found";
                        }
                        ?>

                    </div>
                    
                </div>
            </section>
             <!--===================ADD PROJECT ====================-->
             <section class="about section" id="project">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Add Project</h1>
                        </div>
                        <!-- <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Save Project
                            </div>
                        </div>  -->
                    </div>
                    <div class="card_wrapper">
                        <form action="project.php" method="POST">
                        <div class="wrapper_left">
                            <div class="card">

                                <p>Title</p>
                                <input type="text" class="input"  name="title">

                                <p>Description</p>
                                <textarea cols="10" rows="5"  name="description"></textarea>

                                <p>Link</p>
                                <input type="text" class="input"  name="link">
                                    
                            </div>
                        </div>
                        
                        <div class="wrapper_right ">
                            <div class="card">
                                <div class="project_img-container">
                                 <img src="/assets/img/avatar.jpg" alt="" name="card" class="project_img">
                                </div>
                                <br>
                                <input type="file" name="image" id="">  
                                <br><br><br>
                            </div>    
                        </div>
                        
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <input type="submit" name="pbtn" value="Save Project" class="btn btn-secondary">
                        </div> 
                    </div>
                    </form>
                </div>
            </section>
             <!--===================EDIT PROJECT ====================-->
             <section class="about section" id="project">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Edit Project</h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Update Project
                            </div>
                        </div> 
                    </div>
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <div class="card">

                                <p>Title</p>
                                <input type="text" class="input" />

                                <p>Description</p>
                                <textarea cols="10" rows="5"  ></textarea>

                                <p>Link</p>
                                <input type="text" class="input" />
                                    
                            </div>
                        </div>
                        
                        <div class="wrapper_right ">
                            <div class="card">
                                <div class="project_img-container">
                                 <img src="/assets/img/avatar.jpg" alt="" class="project_img">
                                </div>
                                <br>
                                <input type="file" id="fileimg" />   
                                <br><br><br>
                            </div>    
                        </div>
                        
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Update Project
                            </div>
                        </div> 
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">

            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">

            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">

            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">

            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
         <?php
        include "include/footer.php";

        ?>
        </footer>
        <?php
        if(isset($_POST['pbtn'])){
            include "include/connection.php";
            $til = $_POST['title'];
            $des = $_POST['description'];
            $li = $_POST['link'];
            $image_name = $_POST['image'];
            $date = date('Y-m-d');
            
            // $target_dir = "uploads/";

            // $image_name = $_FILES['image']['name'];
            // $target_file = $target_dir . basename($image_name);
            // $imageFiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // // allow certain file format
            // if($imageFiletype != "jpg" && $imageFiletype != "png" && $imageFiletype != "jpeg"){
            // echo "<script>
            // alert('Sorry only jpg, png, jpeg files are allowed');
            // </script>";
            // exit();
            // }

            $sql=mysqli_query($con, "INSERT INTO project VALUES ('','$image_name','$til','$des','$li','$date')");
               
            

            if($sql){
                echo "<script>window.location = 'project.php'; </script>";
                echo "<script>alert('Data Saved'); </script>";
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }

        ?>
    </body>
</html>
