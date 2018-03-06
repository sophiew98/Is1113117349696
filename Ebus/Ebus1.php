<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <!--Stylesheets -->
        <link rel="stylesheet" href="ebusshop.css" type="text/css"/>
        
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
            </ul>
         </div>  
        
        <!-- Adding page content -->
        <div class="shopbody">
            
              <img src="../images/SALESFORCE.png">
            </div>
            
            <h1>Select a Product</h1>
                
            <br>
                
            <form method="POST" action="Ebus2.php">
              
              <!-- Display radio buttons for cloud service options -->
              <label for="salesforce" class="salesforcelabel">
                
                <input type="radio" id="salesforce" name="product" checked onClick="rbChecked()"/>
                SalesForce @ $100
              </label>
                  
              <br>
              
              <label for="cloud9" class="cloud9label">
                <input type="radio" id="cloud9" name="product" onClick="rbChecked()"/>
                 Cloud9 @ $200
              </label>
                  
              <br>
                  
              <label for="aws" class="awslabel">
                <input type="radio" id="aws" name="product" onClick="rbChecked()"/>
                AWS @ $300
              </label>
                  
              <br>
                  
              <label for="gmail" class="gmaillabel">
                <input type="radio" id="gmail" name="product" onClick="rbChecked()"/>
                Gmail @ $400
              </label>
              
              
              
              <!-- Breakdown of the price for the selected option -->
              <label for="subtotal" class="subtotallabel">
                Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount" class="discountlabel">
                Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
                <br>
                (- Discount)
              </label>
                  
              <br>
              
              <label for="vat" class="vatlabel">
                VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
                  
              <br>
                  
              <label for="total" class="totallabel">
                Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
                (- Discount + VAT)
              </label>
        
              <br>
              
              <div class="add_btn">   
                <button class="add_btn_style" type="submit" id="btnProceed" disabled>Add to Shopping Cart <i class="material-icons">add_shopping_cart</i></button>
              </div>  
                
            </form>
              
            <!-- button for calculating price breakdown of the selected option -->    
            <button class="cal_btn" onClick="calcSub()">Calculate Cost</button>
               
            <br>
              
            <!-- button for clearing the selected options -->    
            <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice <i class="material-icons">delete</i></a>
        </div>
        
        <!-- Displaying copyright information -->
        <footer class="ebus_copyright">
            <p>
                
    </body>
</html>