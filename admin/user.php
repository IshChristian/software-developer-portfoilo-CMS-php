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
               
                

            <!--==================== USERS ====================-->
            <section class="users section" id="users">
                <div class="users_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Users </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal">
                                New User
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
                                <input class="table_search--input" type="text" placeholder="Search User">
                            </div>
                        </div>

                        <table class="table-responsive table">
                            <tr>
                                <td>Photo</td>
                                <td>Name</td>
                                <td>About</td>
                                <td>Role</td>
                                <td>Link</td>
                                <td>Actions</td>
                            </tr>
                            <tr>
                            <?php
                        include "include/connection.php";
                        $sel=mysqli_query($con, "SELECT * FROM user");
                        if(mysqli_num_rows($sel)>0){
                            while($rows=mysqli_fetch_array($sel)){
                                ?>
                            <td>
                                <img src="uploads/<?php echo $rows['image'] ?>" alt="" class="user_img-list">
                            </td>
                            <td><?php echo $rows['name'] ?></td>
                            <td><?php echo $rows['about'] ?></td>
                            <td><?php echo $rows['role'] ?></td>
                            <td><?php echo $rows['link'] ?></td>
                            <td>
                                <button class="btn-icon success">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn-icon danger" >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </div>
                        <?php
                            }
                        }else{
                            echo "Data not found";
                        }
                        ?><td>
                            </tr>
                        </table>
                       
                        

                    </div>
                    </div>
                    
                </div>
            </section>
            <!-------------- USER MODAL --------------->
            <div class="modal main__modal " >
                <div class="modal__content">
                    <span class="modal__close btn__close--modal" >×</span>
                    <form action="user.php" method="POST">
                    <h3 class="modal__title">Add User</h3>
                    <hr class="modal_line"><br>
                    <div>
                        <p>Name</p>
                        <input type="text" class="input"  name="name" >

                        <p>Image</p>
                        <input type="file" class="input"  name="image" >
                        
                        <p>Bio</p>
                        <textarea cols="20" rows="3" name="bio" class="textarea"></textarea>
                       
                        <p>Type</p>
                        <select class="inputSelect" name="role" id="">
                            <option disabled>Select Role</option>
                            <option value="Sponsor">Sponsor</option>
                            <option value="Company">Company</option>
                            <option value="Cooperation">Cooperation</option>
                            <option value="Group">Group</option>
                            <option value="personal">personal</option>
                        </select>

                        <p>Link</p>
                        <input  type="text" id="text" name="link" class="input">
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

           
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
         <?php
        include "include/footer.php";

        ?>
        </footer>
        
       
        <?php
        if(isset($_POST['btn'])){
            include "include/connection.php";
            $name = $_POST['name'];
            $bio = $_POST['bio'];
            $img = $_POST['image'];
            $role = $_POST['role'];
            $link = $_POST['link'];

            $sql=mysqli_query($con, "INSERT INTO user VALUES ('','$img','$name','$bio','$role','$link')");

            if($sql){
                echo "<script>alert('Data Saved'); </script>";
                echo "<script>window.location = 'user.php'; </script>";
                
            }else{
                echo "<script>alert('Data not Saved'); </script>";
            }
            return;
        }
        ?>
    </body>
</html>
