<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>

    <?php include("header.php"); ?>
    <script language="javascript">
      function validate()
        {
       if (form.Consignment.value == "" )
      		 {
      			alert("Consignment No is required.");
      			form.track.focus( );
      			return false;
      		}
      	}
    </script>
              
    <center><h3> Courier status changed to Delivered. <a href="courier-list.php">Click Here</a> To View The status  </h3></center>
  </body>
</html>