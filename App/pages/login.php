<?php
include "db-con.php";
$email = "";
$username = "";


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $email = $_POST["email"];
  $password = $_POST["password"];

 // Query the database for the admin information
  $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($connection,$sql);

  // Check if the user's credentials are valid
  if (mysqli_num_rows($result) > 0) {
    // Log the user in
    session_start();
    $_SESSION["email"] = $email;
    header("Location: add-image.php");
  } else {
    // Display an error message
    echo "Invalid email or password.".mysqli_error($connection);
  }

}

// Close the database connection
// $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
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
            background: white;
            border-radius: 5px;
            border: 1px solid silver;
            margin: 5px 0 10px 0;
            padding: 0 5px;
            outline: none;
        }

        }
        @media (max-width: 400px){
            .container h1{
            text-align: center;
            font-size: 1rem;
            color: #555;
        }
        }
        
    </style>
</head>
<body>
    <div class="container">
    <form method="post">
        <h1>For Administrators only</h1><br>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <input type="submit" class="btn" name="submit" value="Login">
    </form>
</div>
</body>
</html>