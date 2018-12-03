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
    
    
    <body>
     
        
        
<!--        
         <form action="view.php" method="post">
<table border="1" background="red" align="center">

    <tr><td>
    <center>
            <input type="text" name="txtname"/></td>
    </center>
    </tr>
<br>
<tr>

<td><input type="text" name="txtphn" /></td>
</tr>
<br>
<tr>

<td><input type="text" name="txtmail" /></td>
</tr>
<tr>
<td><input type="submit" name="txtbutton" value=" SUBMIT"  /></td>
</tr>
</table>-->
            
<form method = "post" id="insertform" action="updatesuccess.php">
    
    
    
    
    <div class="container">
  <div class="row">
    <div class="col-sm-2">
     
    </div>
    <div class="col-lg-8">
       <?php
        include_once 'connection.php';
        
        
        
        if(isset($_GET['edit']))
{

    $id=$_GET['edit'];
    echo $id;
    $sql="select * from custmr1 where id='$id'";
    $res=mysqli_query($con,$sql) or die("Failed".mysqli_error());
    $row=mysqli_fetch_assoc($res);
    session_start();
    $_SESSION['id'] = $id;
}

mysqli_close($con);
?>
    <div class="centered1">
        <table class="table1">
            <tr>   
                        <centre><td><center>
                               
                               <input id="txtname" type="text" name="txtname" 
                                      class="form-control" value="<?php echo $row['name']; ?>"/>
                            </center>
                        </td>
</centre>

          
                     </tr>
                     
                     <tr>
                       
                         <td>  <center>                    
                            <input name="txtphn" type="text" id="txtphn" class="form-control" value="<?php echo $row['phone']; ?>"/></td>
                     </center>               
           </tr>
                  
                     <tr>
                        
                         <td><center><input name = "txtmail" type = "email" 
                           id = "txtmail" class="form-control" value="<?php echo $row['email']; ?>"/></td>
                     </center>
           </tr>
                     <tr>
                       
                         <td><center>
                            <input name = "txtaddr" type = "text" 
                           id = "txtaddr" class="form-control" value="<?php echo $row['address']; ?>"/></td>
                     </center>
                  
                     
                     <tr>
                             
                         <td>   <center> <input type = "submit" id = "submit" name="submit" class="button" value='SUBMIT'></center>                        </td>
<!--                             <button class="button">SUBMIT</button>-->
 </tr>
                  
                  </table>
   
        </div>
        </div>
        
        
        
        
        
        
 
        
        
        
        
        
        
        
        
        
        
        
       
    
               </form>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        
    
$("#insertform").validate(
        {
            rules:{
            txtname: {
                required: true,
            
            },
            txtphn:{
                required:true,
                minlength:10,
                maxlength:10,
                number:true
                
            },
            txtmail:
                    {
                        required:true,
                        email:true
                    },
            txtaddr:
                    {
                        required:true            
                    }
        
        },
        messages:{
            txtname:
                    {
                        required:" !",
                        
                    },
                    txtphn:
                    {
                        required:" !",
                        minlength:" !",
                        maxlength:" !"
                    },
                    txtmail:
                    {
                        required:" !",
                        email:" !"
                    },
                    txtaddr:
                    {
                        required:" !"
                    },
            
        }
    });
    });
</script>
   
    </div>
    <div class="col-sm-2">
     
    </div>
  </div>
</div>
    
    
    
    
           
       

           
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   -->

    </body>
</html>
