
<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="table.css">
    </head>
    <body>
        <form action='view.php' method='GET'>



<?php
echo "hello";
include_once 'connection.php';

 


if(isset($_GET['del']))
{
    echo "hai";
    $id=$_GET['del'];
    echo $id;
    $query="select * from custmr1 where id='$id'";
 $result=mysqli_query($con,$query);
 $row= mysqli_fetch_assoc($result);
 

 
 
 
 $image="assets/images/profile_picture/".$row['image'];
 echo $image;

 
    unlink($image);
    
    $sql="delete from custmr1 where id='$id'";
    $res= mysqli_query($con,$sql) or die("Failed".mysqli_error());
    echo "<meta http-equiv='refresh' content='0;url=view.php'>";
    
       
    
    
    
    
}







mysqli_close($con);
?>
    </form>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
        
    </body>
</html>