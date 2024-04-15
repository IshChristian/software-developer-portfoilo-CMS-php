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
               
                

            <!--==================== TESTIMONIALS ====================-->
            <section class="testimonials section" id="testimonials">
                <div class="testimonials_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Testimonials </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New Testimonial
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
                                <input class="table_search--input" type="text" placeholder="Search Testimonial">
                            </div>
                        </div>
            
                        <div class="testimonial_table-heading">
                            <p>Photo</p> 
                            <p>name</p>
                            <p>Function</p>
                            <p>Testimony</p>
                            <p>Rating</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <?php
                        include "include/connection.php";
                        // session_start();
                        $sel=mysqli_query($con, "SELECT * FROM testimonial");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                        <div class="testimonial_table-items">
                            <p>
                                <img src="uploads/<?php echo $rows['Image'] ?>" alt="" class="testimonial_img-list">
                            </p>
                            <p><?php echo $rows['Name'] ?></p>
                            <p><?php echo $rows['Function'] ?></p>
                            <p><?php echo $rows['Testimony'] ?></p>
                            <p><?php echo $rows['Rating'] ?></p>
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
                            echo "Data not found";
                        }
                        ?>
                    </div>
                    
                </div>
            </section>
             <!--===================ADD TESTIMONIAL ====================-->
             <section class="about section" id="testimonial">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Add Testimonial</h1>
                        </div>
                        <!-- <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Save Testimonial
                            </div>
                        </div>  -->
                    </div>
                    <form action="testimonial.php" method="POST">
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <div class="card">
                      
                                <p>Name</p>
                                <input type="text" class="input" name="name">
                                
                                <p>Function</p>
                                <input type="text" class="input" name="function">

                                <p>Testimony</p>
                                <textarea cols="10" rows="5" name="testimony"></textarea>

                            </div>
                        </div>
                        
                        <div class="wrapper_right ">
                            <div class="card">
                                <p>Photo</p>
                                <div class="testimonial_img-container">
                                 <img src="/assets/img/avatar.jpg" alt="" class="testimonial_img">
                                </div>
                                <input type="file" id="fileimg" name="image">   
                                <br>
                                <p>Rating ?/5</p>
                                <input type="text" class="input" name="rating">
                            </div>    
                        </div>
                        
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            
                        </div>
                        <div class="titlebar_item">
                            <input type="submit" name="tbtn" value="Save testimony" class="btn btn-secondary">
                        </div> 
                    </div>
                    </form>
                </div>
            </section>
             <!--===================EDIT TESTIMONIAL ====================-->
             <section class="about section" id="testimonial">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Edit Testimonial</h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Update Testimonial
                            </div>
                        </div> 
                    </div>
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <div class="card">
                      
                                <p>Name</p>
                                <input type="text" class="input" />
                                
                                <p>Function</p>
                                <input type="text" class="input" />

                                <p>Testimony</p>
                                <textarea cols="10" rows="5"  ></textarea>

                            </div>
                        </div>
                        
                        <div class="wrapper_right ">
                            <div class="card">
                                <p>Photo</p>
                                <div class="testimonial_img-container">
                                 <img src="/assets/img/avatar.jpg" alt="" class="testimonial_img">
                                </div>
                                <input type="file" id="fileimg" />   
                                <br>
                                <p>Rating ?/5</p>
                                <input type="text" class="input" />
                            </div>    
                        </div>
                        
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Update Testimonial
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
        if(isset($_POST['tbtn'])){
            include "include/connection.php";
            $name = $_POST['name'];
            $fun = $_POST['function'];
            $test = $_POST['testimony'];
            $rat = $_POST['rating'];
            $image_name = $_POST['image'];

            $sql=mysqli_query($con, "INSERT INTO  testimonial VALUES ('','$name','$fun','$test','$image_name','$rat')");

            if($sql){
                echo "<script>alert('Data Saved'); </script>";
                echo "<script>window.location = 'testimonial.php'; </script>";
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }


        ?>
    </body>
</html>
