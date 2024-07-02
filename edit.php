<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit Book</title>
    
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <?php 
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            include("connect.php");
            $sql = "SELECT * FROM books WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            // mysqli_query($conn, $sql) for this line get data from database 
            $row = mysqli_fetch_array($result);
            //  mysqli_fetch_array($result); after geeting data need to convert to a array 
            ?>
            <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"] ?>" placeholder='Book Title' id="">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" value="<?php echo $row["author"] ?>" placeholder='Author Name: ' id="">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Adventure" <?php if($row['type'] == "Adventure") {echo "selected";} ?>>Adventure</option>
                    <option value="Fantasy" <?php if($row['type'] == "Fantasy") {echo "selected";} ?>>Fantasy</option>
                    <option value="Comedy" <?php if($row['type'] == "Comedy") {echo "selected";} ?>>Comedy</option>
                    <option value="Horror" <?php if($row['type'] == "Horror") {echo "selected";} ?>>Horror</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" value="<?php echo $row["description"] ?>" placeholder='Book Description' id="">
            </div>
            <input type="hidden" name="id" value = <?php echo $row["id"] ?>>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="edit" value="Update">
            </div>
        </form>
            <?php
        }
        ?>
    </div>
</body>
</html>