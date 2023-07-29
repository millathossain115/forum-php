<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php 

if (isset($_POST['submit'])) {
         if(empty($_POST["email"]) or empty($_POST["password"])) {
        
        echo "<script>alert('one or more input fields are empty');</script>";
        
    }else{

        // get the data here
         $email = $_POST['email'];
        // $username = $_POST['username'];
        $password = $_POST['password'];
        
        $login = $conn->query("SELECT* FROM users WHERE email = '$email'");
        $login->execute();
        
        $fetch = $login->fetch(PDO::FETCH_ASSOC);
        
        if ($login->rowCount()>0) {
          
          if (password_verify($password, $fetch['password'])) {

            $_SESSION['username'] = $fetch['username'];
            $_SESSION['user_id'] = $fetch['id'];
            $_SESSION['email'] = $fetch['email'];
            // $_SESSION['username'] = $fetch['username'];

            header("location: ".APPURL."");
            
            // echo "<script>alert('LOGGED IN');</script>";
          }else {
            echo "<script>alert('email or password is wrong');</script>";
          }
          
        }
      
    }
  }


?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="main-col">
                <div class="block">
                    <h1 class="pull-left">login</h1>
                    <h4 class="pull-right">A Simple Forum</h4>
                    <div class="clearfix"></div>
                    <hr>
                    <form role="form" method="post" action="login.php">

                        <div class="form-group">
                            <label>Email Address*</label> <input type="email" class="form-control" name="email"
                                placeholder="Enter Your Email Address">
                        </div>

                        <div class="form-group">
                            <label>Password*</label> <input type="password" class="form-control" name="password"
                                placeholder="Enter A Password">
                        </div>

                        <input name="submit" type="submit" class="color btn btn-default" value="login" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="sidebar">




                <?php require "../includes/footer.php";?>