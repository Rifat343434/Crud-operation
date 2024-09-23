<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    

<title>PHP CRUD APPLICATION</title>
</head>
<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5"
style="background-color: #00ff5573;">
   <h1> PHP Complete CRUD Application </h1>
</nav>

<div class="container">
    <a href="add_new.php"><input type="button" class="btn btn-dark mb-3" value="Add New"></a>

    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

        <?php 
        include "db_conn.php";
 $sql = "SELECT * FROM 'crud operation'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            ?>

                <tr>
                    <td ><?php echo $row['Id']; ?></th>
                    <td ><?php echo $row['First_name']; ?></th> 
                    <td ><?php echo $row['Last_name']; ?></th>
                    <td ><?php echo $row['email']; ?></th>
                    <td ><?php echo $row['Gender']; ?></th>
                  
                    <td>

                        <a href="edit.php"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="edit.php"><i class="fa-solid fa-trash fs-5 "></i></a>
                    </td>
                    
                    </tr>

    <?php

}
        ?>


    
   
  </tbody>
</table>
</div>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>