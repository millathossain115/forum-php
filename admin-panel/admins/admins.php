<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>

<?php 

    $admins =  $conn->query("SELECT* FROM admins");
	$admins->execute();
	$allAdmins = $admins->fetchAll(PDO::FETCH_OBJ);
 
?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="create-admins.html" class="btn btn-primary mb-4 float-end">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($allAdmins as $admin): ?>
                  <tr>
                    <th scope="row"><?php echo $admin->id; ?></th>
                    <td><?php echo $admin->adminname; ?></td>
                    <td><?php echo $admin->email; ?></td>
                   
                  </tr>
                  <?php endforeach; ?>
                  <!-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                   
                  </tr> -->
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
</div>
  
<?php require "../layouts/footer.php"; ?>