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
               
                

            <!--==================== PROFILE ====================-->
    
            <?php
            include "include/connection.php";
            // session_start();
            $sel=mysqli_query($con, "SELECT * FROM admin");
            if(mysqli_num_rows($sel)>0){
                while($rows=mysqli_fetch_array($sel)){
                    ?>
            <section class="about section" id="about">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>My Profile</h1>
                        </div>
                        
                    </div>
                    <form action="profile.php" method="POST">
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <div class="card">
                                <p>Full Name</p>
                                <input type="text" class="input" name="name" value="<?php echo $rows['username']; ?>">

                                <p>Email</p>
                                <input type="email" class="input" name="email" value="<?php echo $rows['email']; ?>">

                                <p>Experience (optional)</p>
                                <textarea cols="10" rows="5"  ></textarea>  
                                
                                <p>Password (leave blank if you don't want to change)</p>
                                <input type="password" class="input" name="password" value="<?php echo $rows['password']; ?>">
                            </div>
                        </div>
                        
                        <div class="wrapper_right ">
                            <div class="card">
                                <div class="avatar_profile">
                                 <img src="/assets/img/avatar.jpg" alt="" class="avatar_profile_img">
                                </div>
                                <input type="file" id="fileimg" name="" value="">   
                            </div>    
                        </div>
                        
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            
                        </div>
                        <div class="titlebar_item">
                            <input type="submit" name="btn" value="Save Changes" class="btn btn-secondary">
                        </div> 
                    </div>
                    </form>
                </div>
            </section>
            <?php
                }
            }
            ?>

        </main>
        
        <!--==================== CHART JS ====================-->
        <footer class="footer">
         <?php
        include "include/footer.php";

        ?>
        </footer>
        <?php
        if(isset($_POST['btn'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql=mysqli_query($con, "UPDATE admin SET username='$name',email='$email',password='$password'");

            if($sql){
                echo "<script>alert('Data Saved'); </script>";
                echo "<script>window.location = 'profile.php'; </script>";
                
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }

        ?>
    </body>
</html>
