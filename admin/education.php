<?php
if(isset($_POST['btn'])){
    include "include/connection.php";
    $ins = $_POST['institution'];
    $per = $_POST['period'];
    $deg = $_POST['degree'];
    $dep = $_POST['department'];

    $sql=mysqli_query($con, "INSERT INTO education (Institution, Period, Degree, Department) VALUES ('$ins','$per','$deg','$dep')");

    if($sql){
        echo "<script>window.location='education.php' </script>";
        echo "<script>alert('Data Saved'); </script>";
    }else{
        echo "<script>alert('Data not Saved'); </script>";
    }
    return;
};
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
               
                

            <!--==================== EDUCATIONS ====================-->
            <section class="educations section" id="educations">
                <div class="skills_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Educations </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New Education
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
                                <input class="table_search--input" type="text" placeholder="Search Education">
                            </div>
                        </div>
            
                        <div class="education_table-heading">
                            <p>Institution</p> 
                            <p>Period</p>
                            <p>Degree</p>
                            <p>Department</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <div class="education_table-items">
                        <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT * FROM education");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                echo "<p>". $rows['Institution'] ."</p>";
                                echo "<p>". $rows['Period'] ."</p>";
                                echo "<p>". $rows['Degree'] ."</p>";
                                echo "<p>". $rows['Department'] ."</p>";
                                echo "<div>
                                <button class='btn-icon success'>
                                    <i class='fas fa-pencil-alt'></i>
                                </button>
                                <button class='btn-icon danger' >
                                    <i class='far fa-trash-alt'></i>
                                </button>
                            </div>
                            ";
                            }
                        }else{
                            echo "<p>Data not found</p>";
                        }
                        ?>
                            
                        </div>

                    </div>
                    
                </div>
                <!-------------- EDUCATION MODAL --------------->
                <div class="modal main__modal " >
                    <div class="modal__content">
                        <span class="modal__close btn__close--modal" >×</span>
                        <h3 class="modal__title">Add Education</h3>
                        <hr class="modal_line"><br>
                        <div>
                            <form action="education.php" method="POST">
                            <p>Institution</p>
                            <input type="text" class="input" name="institution">

                            <p>Period</p>
                            <input type="text" class="input" name="period">

                            <p>Degree</p>
                            <input type="text" class="input" name="degree">

                            <p>Department</p>
                            <input type="text" class="input" name="department">
                           
                        </div>
                        <br><hr class="modal_line">
                        <div class="model__footer">
                            <button class="btn mr-2 btn__close--modal" @click="closeModal()">
                                Cancel
                            </button>
                            <input type="submit" name="btn" value="Save" class="btn btn-secondary btn__close--modal ">
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
        
    </body>
</html>
