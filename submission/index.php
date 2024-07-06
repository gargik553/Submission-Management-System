
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_google.css"> 
    <link rel="stylesheet" href=login-temp.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>DIEMS Login Form</title>
</head>
<body>
    <div class="box">
        <div class="img" align="center"><img src="img/diems logo new.jpg" ></div>
        <div class="center">
          <h1>Submission Management System</h1>
        </div>
        <form method="post">
          <div class="inputBox">
            <input type="email" name="email" required=""  value="">
            <label>E-mail address</label>
          </div>
		  <div class="inputBox">
            <input type="password" name="password" required=""  value="">
            <label>password</label>                                                                     
          </div>
          <!-- loginas_class -->
            <div class="select-box" style="position: relative; left: 80px;" >
              <select type="loginas" id="loginas" name="loginas" required>
                <option selected hidden value>Login as?</option>
                <option value="stusec">Student section</option>
                <option value="acc">Account section</option>
                <option value="lib">Library</option>
                <option value="hod">HOD</option>
                <option value="yc">Year Co-ordinator</option>
                <option value="fc">Faculty</option>
                <option value="ct">Class Teacher</option>
              </select>
          </div>
        
          <div class="inputBox">
          <input type="submit" name="login" value="login" ></div>
        </form>
      
    </body>
    </html>

<?php
      include 'dbcon.php';

      if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $loginas = $_POST['loginas'];
        $user_search = " select * from register where email = '$email' ";
        $query = mysqli_query($con,$user_search);

        $user_count =   mysqli_num_rows($query);

        if($user_count){
            $user_pass = mysqli_fetch_assoc($query);
            $db_pass = $user_pass['password'];

            $_SESSION['email'] = $user_pass['email'];
            //$_SESSION['login'] = $user_pass['userid'];

            if($password==$db_pass){
              if($loginas=="hod")
              { ?>
                <script>
                location.replace("php/hod1.php")
               </script>
            
    
              <?php
            }
            if($loginas=="acc")
              { ?>
                <script>
                location.replace("php/main_account.php")
               </script>
            
    
              <?php
            }
            if($loginas=="lib")
              { ?>
                <script>
                location.replace("php/library.php")
               </script>
            
    
              <?php
            }

            if($loginas=="stusec")
              { ?>
                <script>
                location.replace("php/student_sec.php")
               </script>
            
    
              <?php
            }
            if($loginas=="yc")
              { ?>
                <script>
                location.replace("php/yearco1.php")
               </script>
            
    
              <?php
            }

          }
          else {
              ?>
                <script>
                  alert('Incorrect Userid or Password !');
                </script>
              <?php
            }
        }else{
          ?>
            <script>
              alert('Incorrect Userid or Password !');
            </script>
          <?php
        }
      }
?>