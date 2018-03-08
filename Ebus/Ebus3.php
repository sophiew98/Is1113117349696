<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
          <link rel="stylesheet" href="ebusshop.css" type="text/css"/>
    </head>
    <body>
         <!--Creating the Navbar-->
        <div class="ebusinessheader">
        
             <ul style= "list-style-type:none;background-color:#191970;padding:1%;text-align:center;">
           <style>
               ul li :hover {
                   background:black;
                   cursor: pointer; 
                   text-decoration:none;
                   color:white;
               }
               ul li{
                   background-color:#191970;
                   list-style:none;
                    display:inline; 
                    font-size:20px;
                    font-family:Arial;
               }
               ul li a{
                   color:white;
                      text-decoration:none;
                      padding: 14px 16px;
                      text-align:center;
               }
           </style>
           
                <li  style="display:inline;text-align:center;"><a href="ebusinesshomepage.html">Home</a></li>
               <li style="display:inline;text-align:center;"><a href="ebusinessabout.html">Products</a></li>
                <li  style="display:inline;text-align:center;"><a href = "Ebus1.php">Shop</a></li>
                 <li  style="display:inline;text-align:center;"><a href="cloudservices.html">About Cloud</a></li>
                 <li  style="display:inline;text-align:center;"><a href="../Cv/cv_page1.html">CV</a></li>
            </ul>
            
         </div>  
         
         <div class="ebus1">
        
       
        <div class="ebusbackground">
            
            <h1>Receipt</h1>
            
           
            
            <p>
              
            
            <p class="ebus3_name">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Username: " . $_SESSION["user_name"] . ".";
                ?>
            </p>
            
            <p class="ebus3_email">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Email: " . $_SESSION["user_email"] . ".";
                ?>
            </p>
            
            <p class="ebus3_total">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Total: " . $_SESSION["total"] . ".";
                ?>
            </p>
            
            <br>
            
            <h3>Thanks you for your purchase!</h3>
            
            <br>
            
           <input class="button" type="button" value="Shop Now" onclick="window.location.href='Ebus1.php'" />
            
        </div>
        </div>
        <div class="ebusfooter">
             Sophie Walker , Copyright &copy; 2018
             </div>
    </body>
</html>