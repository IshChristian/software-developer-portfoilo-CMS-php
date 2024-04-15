<?php
include "include/connection.php";

?>
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
                <section class="overview" id="overview">
                    <div class="overview_left">
                        <div class="overview_analyse">
                            <canvas id="chart" width="1228" height="614" style="display: block; box-sizing: border-box; height: 614px; width: 100%;"></canvas>
                        </div>
                       <!-- <div class="titlebar">
                            <div class="titlebar_item">
                                <h1>Skills</h1>
                            </div>
                            <div class="titlebar_item">
                                
                            </div>
                        </div>
                        <div class="overview_skills">
                            <div class="overview_skills-title">
                                <h3>Frontend developer</h3>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">JavaScript</h3>
                                    <span class="skills_number">75%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="overview_skills">
                            <div class="overview_skills-title">
                                <h3>Backend developer</h3>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Node Js</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Python</h3>
                                    <span class="skills_number">75%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Ruby</h3>
                                    <span class="skills_number">75%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="overview_skills">
                            <div class="overview_skills-title">
                                <h3>Designer</h3>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Figma</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Sketch</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Adobe XD</h3>
                                    <span class="skills_number">75%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Photoshop</h3>
                                    <span class="skills_number">75%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="overview_right">
                        <div class="titlebar">
                            <div class="titlebar_item">
                                <h1>Overview Dashboard</h1>
                            </div>
                            <div class="titlebar_item">
                                
                            </div>
                        </div>

                        <!-- TOP CARDS -->
                        <div class="overview_cards">
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(s_id) as skills FROM skill;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>Skills</p>
                                    <span><?php echo $rows['skills']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(id) as education FROM education;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>Educations</p>
                                    <span><?php echo $rows['education']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(id) as experience FROM experience;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>Experience</p>
                                    <span><?php echo $rows['experience']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(s_id) as services FROM service;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>Service</p>
                                    <span><?php echo $rows['services']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(id) as projects FROM project;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>Project</p>
                                    <span><?php echo $rows['projects']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(id) as testimonials FROM testimonial;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>Testimonials</p>
                                    <span><?php echo $rows['testimonials']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT COUNT(id) as users FROM user;");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="overview_cards-item">
                                <div class="overview_data">
                                    <p>users</p>
                                    <span><?php echo $rows['users']; ?></span>
                                </div>
                                <div class="overview_link">
                                    <span></span>
                                    <a href="#">View Reports</a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        
                           
                            
                        </div>
                        <!-- MEDIUM CARDS -->
                        <!-- <div class="overview_table">
                            <div class="overview_table-title">
                                <div class="titlebar">
                                    <div class="titlebar_item">
                                        <h1>Latest Projects</h1>
                                    </div>
                                    <div class="titlebar_item">
                                        
                                    </div>
                                </div>
                                <div class="table">
                                    <div class="overview_table-header">
                                       <p>Image</p> 
                                       <p>Product</p>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio2.jpg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio3.jpg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                </div>
                            </div>
                            <div class="overview_table-title">
                                <div class="titlebar">
                                    <div class="titlebar_item">
                                        <h1>Latest Testimonials</h1>
                                    </div>
                                    <div class="titlebar_item">
                                        
                                    </div>
                                </div>
                                <div class="table">
                                    <div class="overview_table-header">
                                       <p>Image</p> 
                                       <p>Product</p>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                    <div class="overview_table-items" >
                                        <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;" />
                                        <a>Product item.name item.name item.name</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        
                    </div>
                </section>
                

            <!--==================== ABOUT ====================-->
            

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
    </body>
</html>
