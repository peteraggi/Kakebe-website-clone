<?php
include "db-con.php";

if(isset($_POST['submit'])){
    $image = $_POST['image'];
    $description = $_POST['description'];

    $sql = "INSERT INTO images (image, description) VALUES ('$image', '$description')";
    $result = mysqli_query($connection,$sql);
    if($result){
        header("location:gallery.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-image</title>
</head>
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            min-height: 100vh;
            display: flex;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .container{
            margin: auto;
            width: 500px;
            max-width: 90%;
        }
        .container form{
            width: 100%;
            height: 100%;
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        .container h1{
            text-align: center;
            font-size: 2rem;
            color: #555;
        }
        .container form .form-control{
            width: 100%;
            height: 40px;
            background: white;
            border-radius: 5px;
            border: 1px solid silver;
            margin: 10px 0 18px 0;
            padding: 0 10px;
            outline: none;
        }
        .container form .btn{
            width: 100%;
            height: 35px;
            cursor: pointer;
            color: white;
            text-transform: uppercase;
            border: none;
            outline: none;
            background: blue;
            border-radius: 10px;
            transition: .5s;
        }
        .container form .btn:hover{
            opacity: .7;
        }

        @media (max-width: 755px){
            .container{
            max-width: 90%;
        }
        .container form{
            width: 100%;
            height: 100%;
            background-color: white;
            border-radius: 5px;
            padding: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        .container h1{
            text-align: center;
            font-size: 1.6rem;
            color: #555;
        }
        .container form .form-control{
            width: 100%;
            height: 30px;
            font-size: 1rem;
            background: white;
            border-radius: 5px;
            border: 1px solid silver;
            margin: 5px 0 10px 0;
            padding: 0 5px;
            outline: none;
        }

        }
       

        
    </style>
<body>
<div class="container">
    <form method="post">
        <h1>Add image</h1><br>
        <div class="form-group">
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Enter image description" required>
        </div>
        <input type="submit" class="btn" name="submit" value="Add image">
    </form>
</div>
</body>
</html>