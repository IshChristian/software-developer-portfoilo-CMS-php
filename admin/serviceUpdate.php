<?php
session_start();
echo $_SESSION['sid'];
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
            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <div class="services_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Services</h1>
                        </div>
                        <!-- <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New Service
                            </div>
                        </div>  -->
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
            
                        <div class="service_table-heading">
                            <p>Title</p> 
                            <p>Icon</p>
                            <p>Description</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT * FROM service");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                                <div class="service_table-items">
                            <p><?php echo $rows['s_name']; ?></p>
                            <button class="service_table-icon">
                            <?php echo $rows['s_icon']; ?>
                            </button>
                            <p><?php echo $rows['s_description']; ?>	
                            </p>
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
                <!-------------- SERVICES MODAL --------------->
                <div class="modal main__modal " >
                    <div class="modal__content">
                        <span class="modal__close btn__close--modal" >×</span>
                        <form action="service.php" method="POST">
                        <h3 class="modal__title">Add Service</h3>
                        <hr class="modal_line"><br>
                        <div>
                            <p>Service Name</p>
                            <input type="text" class="input" name="name">

                            <p>Icon Class</p>
                            <input type="text" class="input" name="icon">
                            <span style="color:#006fbb;">Find your suitable icon: Font Awesome</span>

                            <p>Description</p>
                            <textarea cols="10" rows="5" name="description"></textarea>
                        </div>
                        <br><hr class="modal_line">
                        <div class="model__footer">
                            <button class="btn mr-2 btn__close--modal" @click="closeModal()">
                                Cancel
                            </button>
                            <input type="submit" value="Save" name="sbtn" class="btn btn-secondary btn__close--modal ">
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
         
        </footer>
        
        <!--==================== CHART JS ====================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
        <?php
        if(isset($_POST['sbtn'])){
            include "include/connection.php";
            $name = $_POST['name'];
            $icon = $_POST['icon'];
            $des = $_POST['description'];

            $sql=mysqli_query($con, "UPDATE service SET s_name='$name',s_icon='$icon',s_description='$des' WHERE s_id=''");

            if($sql){
                header("location:service.php");
                echo "<script>alert('Data Saved'); </script>";
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }
        ?>
    </body>
</html>
