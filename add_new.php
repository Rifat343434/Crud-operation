<?php 
include ('db_conn.php');

if(isset($_POST['First_name']) && isset($_POST['Last_name']) && isset($_POST['email']) && isset($_POST['Gender'])) {
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $Gender = $_POST['Gender'];

    $sql = "INSERT INTO 'crud operation'('Id', 'First_name', 'Last_name', 'email', 'Gender') 
    VALUES (NULL, '$First_name', '$Last_name', '$email', '$Gender')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "New record created Successfully";

    }
    else{
        echo "Failed:" . mysqli_error($conn);

    }
}
	


   
?>






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

    <div class="text-center mb-4">
        <h3> Add New User </h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>


<div class="container d flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">

            <div class="col">
                <label class="form-label"> First Name : </label>
                <input type="text" class="form-control" name="First Name" placeholder="Enter First Name">
            </div>


            <div class="col">
                <label class="form-label"> Last Name : </label>
                <input type="text" class="form-control" name="Last Name" placeholder="Enter Last Name">
            </div>

                

            <div class="mb-3">
                <label class="form-label"> Email : </label>
                <input type="text" class="form-control" name="Email" placeholder="Name@example.com">
            </div>



            <div class="form-group mb-3">
                <label >Gender :</label> &nbsp;
                <input type="radio" class="form-check-input" name="Gender" id="male" value="Male">
                <label for="male" class="form-input-label">Male</label>

                &nbsp;

                <input type="radio" class="form-check-input" name="Gender" id="Female" value="Female">
                <label for="Female" class="form-input-label">Female</label>
           </div>
        



<div>
    <button type="submit" class="btn btn-success" name="submit"> Save </button>
    <a href="index.php" class="btn btn-danger"> Cancel </a>
</div>


    </form>

  </div>

</div>



<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>