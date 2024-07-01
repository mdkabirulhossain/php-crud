<?php
    include("connect.php");
    if(isset($_POST["create"])){//isset means if anyone click then post data $_POST(Add BOOK name) value put here
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        //mysqli_real_escape_string it use bcz it prevent special character and also prevent hacking
        //$conn that is come from connect.php all the element store here
        //$_POST['title'] which element we get
        $author = mysqli_real_escape_string($conn, $_POST["author"]);
        $type = mysqli_real_escape_string($conn, $_POST["type"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);

        //now write the sql command
        $sql = "INSERT INTO books(title, author, type, description) VALUES ('$title', '$author', '$type', '$description')";
        if(mysqli_query($conn, $sql)){
            echo"Record Insert Successfully";
        }else{
            die("Something wrong check properly");
        }
    } 
?>