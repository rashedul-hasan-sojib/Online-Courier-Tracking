<?php 
session_start();
require_once('library.php');
$rand = get_rand_id(8);
echo $rand;
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
			<h3>Add New Retail Center</h3>
			<form action="process.php?action=add-office" method="post" name="frmShipment" > 
			<table>
				<caption>New Office   Information : </caption>
				<tr>
					<td>Reatil Center Name   :</td>
					<td><input name="OfficeName" type="TEXT" id="OfficeName" size="40"  maxlength="100">  </td>
				</tr>
				<tr>
					<td>Address   :</td>
					<td><textarea name="OfficeAddress" cols="27" rows="2" id="OfficeAddress"></textarea>
              *</td>
				</tr>
				<tr>
					<td>City  :</td>
					<td><input name="City" id="City" maxlength="13" size="40" type="TEXT"></td>
				</tr>
				<tr>
					<td>Phone No. :</td>
					<td><input name="PhoneNo" id="PhoneNo" maxlength="13" size="40" type="TEXT"></td>
				</tr>
				<tr>
					<td>Office Timing :</td>
					<td><input name="OfficeTiming" id="OfficeTiming" maxlength="30" size="40" type="TEXT"></td>
				</tr>
				<tr>
					<td>Contact Person : </td>
					<td><input name="ContactPerson" id="ContactPerson" maxlength="50" size="40" type="TEXT"></td>
				</tr>
				<tr>
					<td></td>
					<td><input name="Submit" type="submit" onClick="MM_validateForm('OfficeName','','R','City','','R','PhoneNo','','R','OfficeTiming','','R','ContactPerson','','R','OfficeAddress','','R');return document.MM_returnValue" value="Add New Office "></td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>