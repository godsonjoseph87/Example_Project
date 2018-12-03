

<link rel="stylesheet" href="table.css">
<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="table.css">
         <div class="header">
                <div class="logo">
                    TEXT VIEW</div>


                <ul class="main-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="insert.php">INSERT</a></li>
                    <li class="active"><a href="view.php">VIEW</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
                
        
        
        <div class="container">
  <div class="row">
    <div class="col-lg-12">
      
        
        
         <?php
        include_once 'connection.php';
        $query="select * from custmr1";
        $result=mysql_query($query);
        ?>
        
        <table align="center" width="90%">
            
            <tr>
            <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email ID</th>
                 <th>Address</th>
                 <th class="clr">Delete</th>
                 <th>Edit</th>
            </tr>
      
        <?php
        while($row=mysql_fetch_assoc($result))
        {
            ?>
            <tr>
                <td contenteditable="true" class="hover">
                    <?php echo $row['id']; ?> 
            </td>
            <td class="hover1">
                    <?php echo $row['name']; ?> 
            </td>
            <td class="hover">
                    <?php echo $row['phone']; ?> 
            </td>
            <td class="hover1">
                    <?php echo $row['email']; ?> 
            </td>
            <td class="hover">
                    <?php echo $row['address']; ?> 
            </td>
            
            <td><center><a href="delete.php?del=<?php echo $row['id'];?>" class="button4">DELETE</a></center></td>
        <td class="hover1"><center><a href="edit.php?edit=<?php echo $row['id'];?>" class="button">EDIT</a></center></td>
            </tr>
            <?php
        }
        ?>
            
            
            
            
            
          </table>
         
         
        
        
        
        
    </div>
  </div>
</div>
        
        
        
        
        
        
                
       
       
         
         
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
         
         
    </body>
</html>
