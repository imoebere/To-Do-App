
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d20a18ac63.js" crossorigin="anonymous"></script>
    <title>Update</title>
</head>


<?php
include "config.php";
$id = $_GET['ID'];
$select = "SELECT * FROM tbltodo WHERE id='$id'";
$query = mysqli_query($con, $select);
$fetch = mysqli_fetch_array($query);
?>
<body class="bg-info">
 <form action="Update1.php" method="POST">
    <div class="container">
      <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
          <h3 class="text-center text-primary font-monospace">Update</h3>
          <div class="col-10">
              <input type="text" required value="<?php echo $fetch['list'];?>" name="list" class="form-control"/>
          </div>
          <div class="col-2">
              <button class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
              <input type="hidden" name="id" value="<?php echo $fetch['id'];?>">
          </div>
      </div>
    </div>
  </form>
</body>
</html>



