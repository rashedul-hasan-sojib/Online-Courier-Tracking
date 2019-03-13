<?php
    session_start();
    require_once('database.php');
    require_once('library.php');
    $error = "";
    if(isset($_POST['txtusername'])){
    	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
    }

    require_once('database.php');
    $sql = "SELECT DISTINCT(off_name)
    		FROM ups_retail_center";
    $result = dbQuery($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <script language="javascript">
        <!--
          function memloginvalidate()
          {
             if(document.form1.txtusername.value == "")
               {
                  alert("Please enter admin UserName.");
                  document.form1.txtusername.focus();
                  return false;
               }
             if(document.form1.txtpassword.value == "")
               {
                  alert("Please enter admin Password.");
                  document.form1.txtpassword.focus();
                  return false;
               }
            }

        //-->
        </script>
   </head>

    <body onLoad="document.form1.txtusername.focus();">
      	<center>
        <h1 style="color:indigo">Administrator Login Area </h1>
        </center>
        <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
            
            <pre>                                                                           Username  : <input name="txtusername" class="forminput" id="txtusername" maxlength="20" type="text"></pre>
            <pre>                                                                           Password  : <input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password"></pre>
            <pre>                                                                           Office    : <select name="OfficeName">
                      <?php 
                        while($data = dbFetchAssoc($result)){
                      ?>
                        <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
                      <?php 
                        }//while
                      ?>
                    </select></pre>
                    <center> <input  name="Submit" class="green-button" value="Login Now" type="submit" style="padding:10px 15px;font-weight:bold;color: red"></center>
        </form>
        <br>
        <center><?php echo $error; ?></center>
        
    </body>
</html>