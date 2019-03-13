<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date, pick_time, status
		FROM ups_shipped_item
		WHERE status = 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);		

?>
<!DOCTYPE html>
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

		<center> <br><br>
					<table border="1px solid black">
						<caption style="color: red;font-size: 20px;font-weight: bold;">Report: Delivered</caption>
						<thead>
							<tr>
								<th>Edit</th>
								<th>Consignment No</th>
								<th>Shipper</th>
								<th>Receiver</th>
								<th>Pickup Date/Time</th>
								<th>Status</th>
							</tr>
						</thead>
						<?php
					
							while($data = dbFetchAssoc($result)){
							extract($data);	
						?>
						<tbody>
							<tr onMouseOver="this.bgColor='#9da6b5';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
								<td>
									<a href="edit-courier.php?cid=<?php echo $cid; ?>">
										<img src="edit_icon.gif" border="0" height="20" width="20">
									</a>
								</td>
								<td class="gentxt"><?php echo $cons_no; ?></td>
							     <td class="gentxt"><?php echo $ship_name; ?></td>
							     <td class="gentxt"><?php echo $rev_name; ?></td>
							     <td class="gentxt"><?php echo $pick_date; ?> - <?php echo $pick_time; ?></td>
							     <td class="gentxt"><?php echo $status; ?></td>
							</tr>
						<?php
							}//while
						?>
						</tbody>
					</table>
					<p style="color: red">**Please click Edit to Update shipped item.</p>
		</center>
	</body>
</html>