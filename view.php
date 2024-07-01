<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>View Description</title>
    <style>
        .book-details{
            background:#f5f5f5f5;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details my-4 ">
            <?php 
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    include("connect.php");
                    $sql = "SELECT * FROM books WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <h1>Title</h1>
                    <p><?php echo $row["title"] ?></p>
                    <h1>Description</h1>
                    <p><?php echo $row["description"] ?></p>
                    <h1>Type</h1>
                    <p><?php echo $row["type"] ?></p>
                    <h1>Author</h1>
                    <p><?php echo $row["author"] ?></p>
                         
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>