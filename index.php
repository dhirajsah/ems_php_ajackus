<?php require('config/conn_db.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EMS - Ajackus</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<meta name="author" content="Gannit">
<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/vendor/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
<!--DataTables -->
<link href="assets/vendor/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php include('header.php') ?>
<main>
  <section>
    <div class="my-5">
      <div class="container">
        <?php if ( isset( $_GET[ 'status' ] ) && $_GET[ 'status' ] == 'done' ) { ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Success!</strong> New employee added successfully. </div>
        <?php } ?>
        <?php if ( isset( $_GET[ 'status' ] ) && $_GET[ 'status' ] == 'updated' ) { ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Success!</strong> New employee updated successfully. </div>
        <?php } ?>
        <?php if ( isset( $_GET[ 'status' ] ) && $_GET[ 'status' ] == 'delete' ) { ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Success!</strong> Employee deleted successfully. </div>
        <?php } ?>
        
        <!---->
        <div class="row">
          <div class="col-lg-6">
            <h2>Manage Employee</h2>
          </div>
          <div class="col-lg-6 text-end"> <a href="add-employee" class="btn btn-info"> <i class="fa fa-plus"></i> Add Employee</a> </div>
        </div>
        
        <!---->
        <div class="mt-3">
          <table id="dataTable" class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name </th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Department</th>
                <th>Hire Date</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $sql = "SELECT * FROM employees ORDER BY `employees`.`id` DESC";
              $query = mysqli_query( $conn, $sql );
              $result_rows = mysqli_num_rows( $query );

              if ( $result_rows > 0 ) {
                while ( $row = mysqli_fetch_assoc( $query ) ) {
                  ?>
              <tr>
                <td><?php echo $row[ "id" ] ?></td>
                <td><?php echo $row[ "first_name" ] ?></td>
                <td><?php echo $row[ "last_name" ] ?></td>
                <td><?php echo $row[ "email" ] ?></td>
                <td><?php echo $row[ "phone_number" ] ?></td>
                <td><?php echo $row[ "department" ] ?></td>
                <td><?php echo $row[ "hire_date" ] ?></td>
                <td><?php echo $row[ "created_at" ] ?></td>
                <td><?php echo $row[ "updated_at" ] ?></td>
                <td><a href="edit-employee.php?emp_id=<?php echo $row["id"] ?>" class="text-success" >Edit</a> | <a href="javascript:void(0)" class="text-danger delete_imp" data-emp="<?php echo $row["id"] ?>">Delete</a></td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include('footer.php') ?>

<!--Script--> 
<script src="assets/vendor/jquery.min.js"></script> 
<script src="assets/vendor/bootstrap5/js/bootstrap.min.js"></script> 
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script> 
<script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/scripts.js"></script> 
</body>
</htm>
