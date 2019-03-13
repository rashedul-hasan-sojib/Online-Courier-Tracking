<?php
    session_start();
    require_once('library.php');
    isUser();
?>
<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>

        <?php
            include("header.php");
        ?>

        <center><h1 style="color: red"> Courier Management System </h1>
        <h3><a href="add-courier.php" class="REDLink">Add Shipment</a></h3>
        <h3><a href="courier-list.php" class="REDLink">List Shipment</a></h3>
        <h3><a href="report.php" class="REDLink">Report</a></h3></center>
    </body>
</html>