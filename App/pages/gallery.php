<?php
include "db-con.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kakebe Tech Gallery</title>
    <link rel="stylesheet" href="assets/lightbox.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
h2{
    text-align: center;
    padding-top: 50px;
}
.container{
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 8%;
}
.gallery{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 30px;
}
.gallery img{
    width: 100%;
}
.add-image a{
    margin-left: 8%;
    text-decoration: none;
    justify-content: center;
    padding-top:20px;
    padding-bottom: 20px;
}
    </style>
</head>
<body>
    <h2>Our Gallery</h2>
    <div class="container">
    <div class="gallery">
    <?php
                    $sql = "SELECT * FROM images";
                    $result = mysqli_query($connection,$sql);
                    
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                        ?> 
        
            <a href="images/<?php echo $row['image'] ?>" data-lightbox="models" data-title="<?php echo $row['description'] ?>">
                <img src="images/<?php echo $row['image'] ?>">
            </a>
        
    
                        <?php
                        }} ?>
    </div>
    </div>

    <div class="add-image">
        <a href="login.php">Add image</a>
    </div>
    

    <script src="assets/lightbox-plus-jquery.js"></script>
</body>
</html>