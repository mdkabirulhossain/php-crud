<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Book List</title>
</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
            <h1>BookList</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add new Book</a>
            </div>
        </header>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Type</th>
      <!-- <th scope="col">Description</th> -->
       <!-- When only click read more then see description  -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);
    // print_r($row);
    while($row = mysqli_fetch_array($result)){
        ?>
         <tr>
      <th scope="row"><?php echo $row["id"]  ?></th>
      <td><?php echo $row["title"]  ?></td>
      <td><?php echo $row["author"]  ?></td>
      <td><?php echo $row["type"]  ?></td>
      <!-- <td><?php echo $row["description"]  ?></td> -->
      <td>
        <a href="view.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Read more</a>
        <a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Edit</a>
        <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
        <?php
    }
    ?>
  </tbody>
</table>
    </div>
    
</body>
</html>