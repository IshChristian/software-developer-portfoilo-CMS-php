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
        <main id="container" class="main">
            <!-- Side Nav Dummy-->
            <div class="main__sideNav"></div>
            <!-- End Side Nav -->
            <!-- Main Content -->
            <div class="main__content">
                <!-- ==================-->
                <!-- Overview Page -->
               
                

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>About Us</h1>
                        </div>
                        <!-- <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Save Changes
                            </div>
                        </div>  -->
                    </div>
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <form action="about.php" method="POST">
                            <div class="card">
                                <p>Full Name</p>
                                <input type="text" class="input" name="name">

                                <p>Email</p>
                                <input type="email" class="input" name="email">

                                <p>Phone</p>
                                <input type="text" class="input" name="phone">

                                <p>Address</p>
                                <input type="text" class="input" name="address">
        
                                <p>Description</p>
                                <textarea cols="10" rows="5" name="description" ></textarea>
                                    
                            </div>
                            <div class="card">
                                <p>Tagline</p>
                                <input type="text" class="input" name="tag">     
                            </div>
                        </div>
                        
                        <div class="wrapper_right ">
                            <div class="card">
                                <div class="avatar_profile">
                                 <img src="/assets/img/avatar.jpg" alt="" class="avatar_profile_img">
                                </div>
                                <input type="file" id="fileimg" name="fileimg">   
                            </div>
                            <div class="card">
                                <p>CV</p>
                                <input type="file" id="filecv" name="cv">    
                            </div>     
                        </div>
                        
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            
                        </div>
                        <div class="titlebar_item">
                            <input type="submit" value="Save Changes" name="btn" class="btn btn-secondary">
                                <!-- Save Changes -->
                            <!-- </button> -->
                        </div> 
                    </div>
                    </form>
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
        if(isset($_POST["btn"])){
            include 'include/connection.php';
            $des = $_POST['description'];

            $insert=mysqli_query($con, "INSERT INTO about (about) VALUES ('$des')");
            
            if($insert){
                echo '<script> alert("Data Saved"); </script>';
            }else{
                echo '<script> alert("Data Saved"); </script>';
            }
        }
        ?>
    </body>
</html>
