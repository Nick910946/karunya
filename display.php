<?php
session_start();
include "header.php";
?>
<style >

 
.display-btn{

        background-color:#fd7e14;
        font-weight: bold; 
        color: #4001a5;
            }
</style>
<main>
    <section class="fontbox banner">
        <div class=" Blue-ShortDotted-Image">
            <img src="images/dot.png">
        </div>
        <div class="rightimages">
        </div>
      <div class="container" style="margin-top: 110px;">
        
        <table class="table table-bordered table-responsive-lg">
            <h2 class=" text-center display-btn">Data Dispaly</h2>

            <tr class="text-center text-dark">
                
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Description</th>
               


            </tr>
                 <?php

                    include "dbcon.php";
                    // $email = $_SESSION['email'];
                    $a = "select * from contact order by id desc";
                    $b = mysqli_query($con,$a);
                    while($c = mysqli_fetch_array($b)){

                
                    


                ?>
                    <tr class="text-center text-dark">


                    <td><?php echo $c['id']?></td>
                    <td><?php echo $c['name']?></td>
                     <td><?php echo $c['email']?></td>
                      <td><?php echo $c['phone']?></td>
                       <td><?php echo $c['description']?></td>
                       

            
                    </tr>
                    <?php

                    }

                    ?>
                    



        </table>
            <a href="contact.php"><button type="submit" class="bannerbtn btnCol btnWhite mt-2">Back</button></a> 


    </div>
    
<?php
include "footer.php";
?>