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
               
                

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <div class="skills_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Skills </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New Skill
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
                                <input class="table_search--input" type="text" placeholder="Search Service">
                            </div>
                        </div>
            
                        <div class="skill_table-heading">
                            <p>Name</p> 
                            <p>Proficiency</p>
                            <p>Service</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <?php
                        include "include/connection.php";
                        // session_start();
                        $sel=mysqli_query($con, "SELECT * FROM skill");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <div class="skill_table-items">
                            <p><?php echo $rows['s_name']; ?></p>
                            <div class="table_skills-bar">
                                 <span class="table_skills-percentage" style="width: <?php echo $rows['s_proficiency']; ?>%;"></span>
                                 <strong> <?php echo $rows['s_proficiency']; ?>%</strong>
                            </div>
                            <p> <?php echo $rows['s_service']; ?></p>
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
                <!-------------- SERVICES MODAL --------------->
                <div class="modal main__modal " >
                    <div class="modal__content">
                        <span class="modal__close btn__close--modal" >×</span>
                        <form action="skill.php" method="POST">
                        <h3 class="modal__title">Add Skill</h3>
                        <hr class="modal_line"><br>
                        <div>
                            <p>Name</p>
                            <input type="text" class="input" name="name">

                            <p>Proficiency</p>
                            <input type="number" class="input" name="proficiency">
                           
                            <p>Service</p>
                            <select class="inputSelect" name="service" id="">
                                <option value="">Please select here</option>
                                <option value="Front-end developer">Front-end developer</option>
                                <option value="Backend developer">Backend developer</option>
                            </select>
                        </div>
                        <br><hr class="modal_line">
                        <div class="model__footer">
                            <button class="btn mr-2 btn__close--modal" @click="closeModal()">
                                Cancel
                            </button>
                            <input type="submit" name="sbtn" value="Save" class="btn btn-secondary btn__close--modal ">
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
        if(isset($_POST['sbtn'])){
            include "include/connection.php";
            $name = $_POST['name'];
            $prof = $_POST['proficiency'];
            $ser = $_POST['service'];

            $sql=mysqli_query($con, "INSERT INTO skill VALUE ('','$name','$prof','$ser')");

            if($sql){
                header("location:skill.php");
                echo "<script>alert('Data Saved'); </script>";
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }
        ?>
    </body>
</html>
