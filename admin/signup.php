<?php include "conn.php";  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Signup</title>
    <!--Made with love by Mutiullah Samim -->
    
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../asset/auth.css">
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <div class="card-header">
            <h3>Admin Sign Up</h3>
            
          </div>
          <div class="card-body">
            <form method="post">
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="name" required=""  placeholder="username">
                
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" name="email" required="" placeholder="Email">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm password">
              </div>
              <div class="row align-items-center remember">
                <input type="checkbox">Remember Me
              </div>
              <div class="form-group">
                <input type="submit" name="signup" value="Signup" class="btn float-right login_btn">
              </div>
            </form>
            <?php
            if(isset($_POST['signup'])){
            $user = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $hashPass = password_hash($password, PASSWORD_DEFAULT);
            $password_len = strlen($password);


                  if($password == $cpassword){
                      $email_select = "select * from admin_auth where email='$email'";
                      $email_qry = mysqli_query($conn, $email_select);
                      $chk_eml = mysqli_num_rows($email_qry); //check korbe DB te ache kina
                      
                      if($chk_eml == 0){ // check korbe email ache kina. thakle 1 dibe then else run hobe r na thakle 0 dibe then nicher statement run hobe.
                            if($password_len >= 8){

                                $ins = "insert into admin_auth(name, email, password) VALUES ('$user', '$email', '$hashPass')";
                                $con = mysqli_query($conn, $ins);

                                if($con){

                                    ?>
                                      <script type="text/javascript">
                                        alert("Admin Signup Successfully");
                                      </script>
                                    <?php

                                }else{  // else of ($con)
                                    ?>
                                      <script type="text/javascript">
                                         alert("Admin Sgnup failed");
                                      </script>
                                    <?php
                                }// end of ($con)
                                     



                            } else{ // else of ($password_len >= 8)

                                ?>
                                  <script type="text/javascript">
                                    alert("Password should be at least 8 characters");
                                  </script>
                                <?php

                            } // end of ($password_len >= 8)

                      }else{  // else of ($chk_eml == 0)
                        
                        ?>
                        <script type="text/javascript">
                            alert("Email already exist");
                        </script>
                      <?php

                      }  // end of ($chk_eml == 0)
                  
                  }else{ // else of($password == $cpassword)
                    ?>
                    <script type="text/javascript">
                       alert("Password not matched");
                    </script>
                    <?php
                  } // end of ($password == $cpassword)


            

            }// end of (isset($_POST['signup']))  

                
            ?>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              Already have an account?<a href="login.php">Login</a>
            </div>
            <!-- <div class="d-flex justify-content-center">
              <a href="#">Forgot your password?</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </body>
</html>