<?php 
	session_start();
	require_once('library.php');
	$rand = get_rand_id(8);
	//echo $rand;
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

		<center><h2 style="color:orange">Add Shipment</h2></center>
		<form action="process.php?action=add-cons" method="post" name="frmShipment" > 

			<hr><hr>
			<center><h4 style="color: violet">Shipper info :</h4></center>
			<pre>Shipper Name       :</pre> <input name="Shippername"  maxlength="100" size="40" type="TEXT"><br>
			<pre>Phone              :</pre> <input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT"><br>
			<pre>Address            :</pre> <span class="REDLink">
						     <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>*
						     </span><br>
			<hr><hr>			
			<center><h4 style="color:blue">Receiver  info :</h4></center>
			<pre>Receiver Name      :</pre> <input name="Receivername" id="Receivername" maxlength="100" size="40" type="TEXT">
			<span class="REDLink">*</span><br>
			<pre>Phone              :</pre> <input name="Receiverphone" id="Receiverphone" maxlength="13" size="40" type="TEXT"><br>
			<pre>Address            :</pre> <span class="REDLink">
			              <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>*
			              </span><br>

			<hr><hr>
			<center><h4 style="color: crimson">Shipment   info :</h4></center>
			<pre>Consignment No     :</pre> <input name="ConsignmentNo"  value="<?php echo strtoupper($rand); ?>" id="ConsignmentNo"  readonly="true" maxlength="13" size="40"  type="TEXT"> <span class="REDLink">*</span> <br>
			<pre>Type of Shipment   :</pre> <select id="Shiptype" name="Shiptype">
					                <option value="Documents" selected="selected">Documents</option>
					                <option value="Parcel">Parcel</option>
					                <option value="Sentiments">Sentiments</option>
			            		</select><br>
			<pre>Weight             :</pre> <input id="Weight" size="10" maxlength="10" name="Weight">(kg)<br>
			<pre>Invoice no         :</pre><input name="Invoiceno" id="Invoiceno" size="40" maxlength="20" onKeyUp="check_phone('Invoiceno')" type="TEXT"><br>
			<pre>Qnty               :</pre> <input name="Qnty" id="Qnty" maxlength="10" size="20" type="TEXT"><br>
			<pre>Booking Mode       :</pre><select name="Bookingmode" id="Bookingmode">
			                <option selected="selected" value="Paid">Paid</option>
			                <option value="ToPay">ToPay</option>
			                <option value="TBB">TBB</option>
			             </select><br>
			<pre>Total freight      :</pre><input id="Totalfreight" size="10" maxlength="13" name="Totalfreight"><br>
			<pre>Mode               :</pre> <select name="Mode" id="Mode">
			                <option selected="selected" value="Air">Air</option>
			                <option value="Road">Road</option>
			                <option value="Train">Train</option>
							<option value="Sea">Sea</option>
			            </select><br>
			<pre>Dept time :</pre> <input name="Depttime" id="Depttime" maxlength="50" size="20" type="TEXT"><br>
			<pre>Destination Office :</pre> <input name="Destination" id="Destination" maxlength="50" size="40" type="TEXT">
			                <span class="REDLink">*</span><br>
			<pre>Pickup Date        :</pre> <input name="Packupdate" id="Packupdate" maxlength="15" type="TEXT"> <span class="REDLink">*</span><br>
			<pre>Pickup Time        :</pre><input name="Pickuptime" id="Pickuptime" maxlength="50" size="20" type="TEXT"><br>
			<pre>Status             :</pre><select name="status" id="status">
			                <option selected="selected" value="In Transit">In Transit</option>
			            </select><br>
			<pre>Comments           :</pre><textarea name="Comments" cols="40" rows="4" id="Comments"></textarea><br>
			<hr><hr><br>
			         <center>
			         	<input style="background-color: black;color: white;font-size: 25px" name="Submit" type="submit" onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Receivername','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','Invoiceno','','R','Qnty','','RisNum','Totalfreight','','R','Pickuptime','','R','Shipperaddress','','R','Comments','','R','Weight','','RisNum','Totalfreight','','R');return document.MM_returnValue" value="Add Courier">
			        </center>	
			        <br><hr><hr>
		</form> 
	</body>
</html>