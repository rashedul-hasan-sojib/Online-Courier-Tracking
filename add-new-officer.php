<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT DISTINCT(off_name)
		FROM ups_retail_center";
$result = dbQuery($sql);		

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>

    <script type="text/JavaScript">
      <!--
      function MM_findObj(n, d) { //v4.01
        var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
          d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
        if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
        for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
        if(!x && d.getElementById) x=d.getElementById(n); return x;
      }

      function MM_validateForm() { //v4.0
        var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
        for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
          if (val) { nm=val.name; if ((val=val.value)!="") {
            if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
              if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
            } else if (test!='R') { num = parseFloat(val);
              if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
              if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
                min=test.substring(8,p); max=test.substring(p+1);
                if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
          } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
        } if (errors) alert('The following error(s) occurred:\n'+errors);
        document.MM_returnValue = (errors == '');
      }
      //-->
    </script>
  </head>

  <body>
  <?php include("header.php"); ?>
  <center>
        <h3>Add New Retail Center Manager</h3>
        <form action="process.php?action=add-manager" method="post" name="frmShipment" > 
        <table>
          <br><br><caption style="color: red;font-size: 20px;font-weight: bold;"><u>Retail Center Manager Information : <u></caption>
          <tr>
            <td>Manager  Name   :</td>
            <td><input name="ManagerName" type="TEXT" id="ManagerName" size="40"  maxlength="100"></td>
          </tr>
          <tr>
            <td>Password   :</td>
            <td><input name="Password" id="Password" maxlength="20" size="40" type="password"></td>
          </tr>
          <tr>
            <td>Address   :</td>
            <td><textarea name="Address" cols="27" rows="2" id="Address"></textarea>*</td>
          </tr>
          <tr>
            <td>Email :</td>
            <td><input name="Email" id="Email" maxlength="40" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td>Phone No. :</td>
            <td><input name="PhoneNo" id="PhoneNo" maxlength="30" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td>Retail Center Name  :</td>
            <td>
              <select name="OfficeName">
                <?php 
                  while($data = dbFetchAssoc($result)){
                ?>
                <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
                <?php 
                 }//while
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('ManagerName','','R','Password','','R','Email','','RisEmail','PhoneNo','','R','Address','','R');return document.MM_returnValue" value="Add New Office Manager"></td>
          </tr>
        </table>
        </form>
      </center>
  </body>
</html>