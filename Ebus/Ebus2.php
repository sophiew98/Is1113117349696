<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="ebusshop.css" type="text/css"/>
        <!--jQuery-->
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
         
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
                 <br/>
                 
        <h2>Please enter your payment details</h2>
        
        
            <form action="Ebus3.php" method="POST">
                <br/>
                <br/>
                <label for="user_name">
                    Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="name" id="user_name" name="user_name">
                </label>
                
                <br>
                
                <label for="user_email">
                    Email Address 
                    <input type="email" id="user_email" name="user_email">
                </label>
                
                <br>
    
                <label for="user_pin" >
                    PIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="pin" id="user_pin" name="user_pin"  maxlength="4" pattern="\d{4}">
                    <br>
                    
                </label>
                 <br/>
                 
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            
            <br>
            
            <button class="btn_validate" onClick="validateName()">Validate</button>
            
            
        </div>
        </div>
        </div>
         <div class="ebusfooter">
             Sophie Walker , Copyright &copy; 2018
             </div>
    </body>
</html>