<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
       
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
               <li style="display:inline;text-align:center;"><a href="ebusinessproducts.html">Products</a></li>
                <li  style="display:inline;text-align:center;"><a href = "Ebus1.php">Shop</a></li>
                 <li  style="display:inline;text-align:center;"><a href="cloudservices.html">About Cloud</a></li>
                 <li  style="display:inline;text-align:center;"><a href="../Cv/cv_page1.html">CV</a></li>
                 
            </ul>
            
         </div>  
         
         <div class="ebus1">
             
            
    <div class="ebusbackground">
         <br/>
            <br/>
            <h2 style="font-family:arial;color:black;text-align:center;">Select a Product</h2>
            
           <br/>
           <!--Creating the labels and radio buttons for the different options-->
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              <br/>
              
               <label for="subtotal">
                Sub Total ;
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount">
                Discount @ 5% ; <input type="text" id="discount" name="discount" value="0.00" readonly/>
                <br>
                (- Discount)
              </label>
                  
              <br>
              
              <label for="vat">
                VAT @ 10% ;
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
                  
              <br>
                  
              <label for="total" >
                Total ;
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
                (- Discount + VAT)
              </label>
        
              <br>
              
        
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            
            <button onClick="calcSub()">Calculate Cost</button>
               
            <br>
              
            <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice</a>
           
                
            </form>
              
            
        </div>
   </div>
        </div>
    <!--Creating the Footer-->
    <div class="ebusfooter">
             Sophie Walker , Copyright &copy; 2018
             </div>
  </body>
    
</html>