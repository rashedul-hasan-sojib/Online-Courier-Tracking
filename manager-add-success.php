<!DOCTYPE html >
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
            
   <center><h3>Office Manager is Added Successfully . <a href="manager-list.php">Click Here</a> To View all Retail Center Manager List</h3></center>
  </body>
</html>