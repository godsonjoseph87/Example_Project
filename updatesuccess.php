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
    <div class="col-sm-8">
     
            
   
    
        
            
       
        
       
        
        
        
            <div class="centered"><center> <img src="assets/images/tick.png" height="150px" width="150px" ></center><span class="blinking">UPDATION SUCCESSFUL!</span></div>
       
        
       
 </div>
        <?php
        session_start();
        $id = $_SESSION['id'];
        
 include_once 'connection.php';
 

$name = $_POST['txtname'];

$email = $_POST['txtmail'];

$phn = $_POST['txtphn'];

$addr=$_POST['txtaddr']; 



 

$query = mysql_query("update custmr1 set name='$name', phone=$phn ,email='$email',address= '$addr' where id=$id");




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
