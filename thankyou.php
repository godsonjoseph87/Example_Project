<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" href="table.css">
<html>
    <head>
        
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="table.css">
        <div class="header">
                
                <ul class="main-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="insert.php">INSERT</a></li>
                    <li><a href="view.php">VIEW</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body class="body1">  
        
        
        
       
        <div class="container">
  <div class="row">
    <div class="col-sm-2">
      
    </div>
    <div class="col-lg-8">
      
            
        
        
   
        <div class="centered">
            
           
            
       
        
        <div class="sliding">
        
        
        
            <div class="centered"> <img class="jumbotron text-center" src="assets/images/tick.png" height="150px" width="150px"><br><span class="blinking">THANK YOU FOR REGISTERING!!</span></div>
       
        
       
</div>
        </div>
        
        <?php
        
        
//        
//        
//        
        
        $target_dir = "C:\Personal\work\daily works\New Folder\assets\images\profile_picture\dp";
$target_file = $target_dir . basename($_FILES["fileupld"]["name"]);


 $image = $_FILES['fileupld']['name'];
       
     


$image="dp".$image;


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileupld"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupld"]["tmp_name"], $target_file)) {
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        
        
        
 include_once 'connection.php';


if(isset($_POST['submit']))
    { 
$name = $_POST['txtname'];
$email = $_POST['txtmail'];
$phn = $_POST['txtphn'];
$addr=$_POST['txtaddr'];

if($name !=''||$email !='')
    {

 mysqli_query($con,"insert into custmr1(name,phone,email,address,image) values ('$name',$phn, '$email','$addr','$image')");

}
else{

}
}
mysqli_close($con);
?>
        
        
<!--        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   -->
        
    </div>
    <div class="col-sm-2">
     
    </div>
  </div>
</div>
        
         
     
      
    
        
    </body>
</html>
