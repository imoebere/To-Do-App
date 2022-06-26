<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d20a18ac63.js" crossorigin="anonymous"></script>
    <title>To-Do List</title>
</head>
<body class="bg-primary">
  <form action="insert.php" method="GET">
    <div class="container">
      <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
          <h3 class="text-center text-primary font-monospace">TODO LIST</h3>
          <div class="col-8">
              <input type="text" required name="list" class="form-control"/>
          </div>
          <div class="col-2">
              <button class="btn btn-outline-primary"><i class="fa-solid fa-square-plus"></i></button>
          </div>
      </div>
    </div>
  </form>
  <!-- getdata -->
  <?php
  include "config.php";
  $select = "SELECT * FROM tbltodo";
  $query = mysqli_query($con, $select);
  ?>
  <div class="container">
    <div class="row">
        <div class="col-8 bg-white m-auto mt-3">
          <table class="table">
            <tbody class="fs-3 text-primary shadow">
              <?php
              while($row = mysqli_fetch_array($query)){

              
              ?>
              <tr>
                <td><?php echo $row['list']; ?></td>
                <td style="width: 10%;"><a href="Delete.php? ID= <?php echo $row['id']; ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                <td style="width: 10%;"><a href="Update.php? ID= <?php echo $row['id']; ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</body>
</html>