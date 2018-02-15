<?php
session_start();
?>
<!DOCKTYPE html>
<html>
        <head>
            <title>RECIEPT</title>
        </head>
        <body>
            <h4>RECIEPT</h4>
            <?php
            //Echo the session variables that were set on previous page
            echo "Total is " . $_SESSION["total"] . ".";
            ?>
        </body>
</html>