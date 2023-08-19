<?php 

  session_start();
  define("ADMINURL","http://localhost/forum/admin-panel");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin AutowhiZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet">
  </head>
  <body>
    

<section class="container" id="wrapper">

    <nav class="navbar  fixed-top navbar-expand-lg  navbar-dark bg-dark shadow">
      <div class="container-fluid">
     
        <a class="navbar-brand" href="#">
          <img src="admin-logo.png" alt="" width="29" height="29" class="ms-4" href="">
          <span class="fw-bold" style="color: #FF1700;">Auto</span><span class="" style="color: #F7EA00;">whiZ</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav side-nav bg-dark text-white" >

          <li class="nav-item">
            <a class="nav-link text-light" style="margin-left: 20px;" href="index.html">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="admins/admins.html" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="categories-admins/show-categories.html" style="margin-left: 20px;">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="topics-admins/show-topics.html" style="margin-left: 20px;">Topics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="replies-admins/show-replies.html" style="margin-left: 20px;">Replies</a>
          </li>
        </ul>


<!-- Side Nav Ended -->

        <ul class="navbar-nav mx-auto">

    <?php if(!isset($_SESSION['adminname'])): ?>

        <li class="nav-item">
            <a class="nav-link text-light" href="../admin-panel/admins/login-admins.php">login
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          
    <?php else: ?>

          <li class="nav-item">
            <a class="nav-link text-light" href="index.html">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          

          <li class="nav-item dropdown">
            <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
              <?php echo $_SESSION['adminname']; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-dark p-0 px-2" href="<?php echo ADMINURL; ?>/admins/logout.php">Logout</a>
              
          </li>
                          
        <?php endif; ?>    

        </ul>
      </div>
    </div>
    </nav>

    <!-- Navbar Ended -->