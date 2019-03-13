<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM ups_retail_center";
$result = dbQuery($sql);		

?>
<!DOCTYPE html >
<html>
	<head>
		<title>Admin</title>
	</head>
	<body>
		<?php include("header.php"); ?>

		<script language="JavaScript">
			var checkflag = "false";

			function check(field) {
			if (checkflag == "false")
			 {
				for (i = 0; i < field.length; i++) {
				if(field[i].type=="checkbox" && field[i].name!="chkAll")
				{
				field[i].checked=true;	
				}
				}
				checkflag = "true";
			}
			else
			{
				for (i = 0; i < field.length; i++) {
				if(field[i].type=="checkbox" && field[i].name!="chkAll")
				{
				field[i].checked=false;
				}
				}
				checkflag = "false";
			}

			}
			function confirmDel(field,msg)
			{
				count=0;
				for (i = 0; i < field.length; i++) {
				if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
				{
				count++;
				}
				}
				
				if(count == 0)
				{
					alert("Select any one record to delete!");
					return false;
				}
				else
				{
					return confirm(msg);
				}
			}
		</script>
		<center>
			<table border="1px solid black">
				<br><br><caption style="color: red;font-size: 20px;font-weight: bold;"><u>View All Retail Center Details</u></caption><br>
				<thead>
					<tr>
						<th>Retail Center Name</th>
						<th>Address</th>
						<th>City</th>
						<th>Phone Numner</th>
						<th>Office Timing</th>
						<th>Contact Person</th>
					</tr>
				</thead>
				<?php
					while($data = dbFetchAssoc($result)){
					extract($data);	
				?>
				<tbody>
					<tr onMouseOver="this.bgColor='#9da6b5';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
				      <td class="gentxt"><?php echo $off_name; ?></td>
				      <td class="gentxt"><?php echo $address; ?></td>
				      <td class="gentxt"><?php echo $city; ?></td>
				      <td class="gentxt"><?php echo $ph_no; ?></td>
				      <td class="gentxt"><?php echo $office_time; ?></td>
					  <td class="gentxt"><?php echo $contact_person; ?></td>
				    </tr>
				    <?php
					}//while
					?>
				</tbody>
			</table>
		</center>
	</body>
</html>