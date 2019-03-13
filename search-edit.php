<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
?>
<!DOCTYPE html>
<html>
  <head>

    <title>Admin</title>

  </head>
  <body>
    <?php include("header.php"); ?>

    <script language="javascript">
      function validate()
        {
       if (document.form1.track.value == "" )
      		 {
      			alert("Consignment No is required.");
      			document.form1.track.focus( );
      			return false;
      		}
      	}
    </script>
    <center>
      <table><br><br>
      
        <caption style="color: #bc25ba;font-weight:bold ;font-size:25px "><u>Enter Consignment Number </u></caption><br>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
         <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
        <tr>
          <td colspan="2" style="color: red;font-weight:bold ;font-size:18px "><span style="color: blue;font-size: 25px">**</span> Key in the Shipment Number to MODIFY the data. This is helpful if you have made spelling errors while adding the shipment.</td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
                  <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
         <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
        <tr>
        <tr>
          <form action="search-courier.php" method="post">
          <td>Enter Consignment number: </td>
          <td><input name="Consignment" class="gentxt" id="track" maxlength="50" type="text"></td>
        </tr>
                 <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
         <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
        <tr>
                 <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
         <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
         </tr>
        <tr>
        <tr>
          <td></td>
          <td><input name="Submit" class="gentxt" value="Submit" type="submit"></td>
          </form>
        </tr>
      </table>
    </center>

                  


</body></html>