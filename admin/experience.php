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
               
                

            <!--==================== EXPERIENCES ====================-->
            <section class="experiences section" id="experiences">
                <div class="skills_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Experiences </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New Experience
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
                                <input class="table_search--input" type="text" placeholder="Search Experience">
                            </div>
                        </div>
            
                        <div class="experience_table-heading">
                            <p>Company</p> 
                            <p>Period</p>
                            <p>Position</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <?php
                        include "include/connection.php";
                        // session_start();
                        $sel=mysqli_query($con, "SELECT * FROM experience");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                                <div class="experience_table-items">
                                <p><?php echo $rows['Company']; ?></p>
                                <p><?php echo $rows['Period']; ?></p>
                                <p><?php echo $rows['Position']; ?></p>
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
                            }
                        ?>
                        

                    </div>
                    
                </div>
                <!-------------- EXPERIENCE MODAL --------------->
                <div class="modal main__modal " >
                    <div class="modal__content">
                        <span class="modal__close btn__close--modal" >×</span>
                        <form action="experience.php" method="POST">
                        <h3 class="modal__title">Add Experience</h3>
                        <hr class="modal_line"><br>
                        <div>
                            <p>Company</p>
                            <input type="text" class="input" name="company">

                            <p>Period</p>
                            <input type="text" class="input" name="period">

                            <p>Position</p>
                            <input type="text" class="input" name="position">
                           
                        </div>
                        <br><hr class="modal_line">
                        <div class="model__footer">
                            <button class="btn mr-2 btn__close--modal">
                                Cancel
                            </button>
                            <input type="submit" value="Save" name="ebtn" class="btn btn-secondary btn__close--modal ">
                        </div>
                        </form>
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
        if(isset($_POST['ebtn'])){
            include "include/connection.php";
            $comp = $_POST['company'];
            $per = $_POST['period'];
            $pos = $_POST['position'];

            $sql=mysqli_query($con, "INSERT INTO experience (Company, Period, Position) VALUES ('','$comp','$per','$pos')");

            if($sql){
                echo "<script>window.location='experience.php' </script>";
                echo "<script>alert('Data Saved'); </script>";
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }
        ?>
    </body>
</html>
