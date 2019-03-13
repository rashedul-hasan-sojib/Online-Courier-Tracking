<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$cid= (int)$_GET['cid'];

$sql = "SELECT *
		FROM ups_shipped_item
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM ups_retail_center";
$result = dbQuery($sql);		
$result_1 = dbQuery($sql_1);
while($data = dbFetchAssoc($result)) {
extract($data);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <?php include("header.php"); ?>
        <center>
            <table >
            <br><br>
                <caption style="color: #bc25ba;font-weight:bold ;font-size:25px "><u> Edit Shipment</u></caption>


                        <tr>
                          <td>Shipper Name : </td>
                          <td><?php echo $ship_name; ?></td>
                        </tr>
                        <tr>
                          <td>Shipper Phone : </td>
                          <td><?php echo $phone; ?></td>
                        </tr>
                        <tr>
                          <td>Shipper Address :</td>
                          <td><?php echo $s_add; ?></td>
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
                        <td>Receiver Name :</td>
                        <td><?php echo $rev_name; ?></td>
                      </tr>
                      <tr>
                        <td>Receiver Phone :</td>
                        <td><?php echo $r_phone; ?></td>
                      </tr>
                      <tr>
                        <td>Receiver Address :</td>
                        <td><?php echo $r_add; ?></td>
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
                  <td>Consignment No  :</td>
                  <td><?php echo $cons_no; ?></td>
                </tr>
                <tr>
                  <td>Ship Type</td>
                  <td><?php echo $type; ?></td>
                </tr>
                <tr>
                  <td>Weight :</td>
                  <td><?php echo $weight; ?>&nbsp;kg</td>
                </tr>
                <tr>
                  <td>Invoice no  :</td>
                  <td><?php echo $invice_no; ?></td>
                </tr>
                <tr>
                  <td>Booking Mode :</td>
                  <td><?php echo $book_mode; ?></td>
                </tr>
                <tr>
                  <td>Total freight :</td>
                  <td><?php echo $freight; ?>&nbsp;Tk.</td>
                </tr>
                <tr>
                  <td>Mode : </td>
                  <td><?php echo $mode; ?></td>
                </tr>
                <tr>
                  <td>Pickup Date/Time  :</td>
                  <td><?php echo $pick_date; ?> -<span class="gentxt"><?php echo $pick_time; ?></span></td>
                </tr>
                <tr>
                  <td>Status :</td>
                  <td><?php echo $status; ?></td>
                </tr>
                <tr>
                  <td>Comments :</td>
                  <td><?php echo $comments; ?></td>
                </tr>
            </table>
            <br><br>
        
        <form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment"> 
          <table>
            <caption style="color: #2eafc9;font-weight: bold;font-size: 25px"><u>Update Status</u></caption>
            <tr>
              <td>New Location:</td>
              <td>
                <select name="OfficeName">
                  <?php 
                  while($data = dbFetchAssoc($result_1)){
                  ?>
                  <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
                  <?php 
                  }//while
                  ?>
               </select> 
             </td>
            </tr>
            <tr>
              <td>New Status:</td>
              <td>
                <select name="status">
                  <option value="In Transit">In Transit</option>
                  <option value="Landed">Landed</option>
                  <option value="Delayed">Delayed</option>
                  <option value="Completed">Completed</option>
                  <option value="Onhold">Onhold</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Comments:</td>
              <td>
                 <textarea name="comments" cols="40" rows="3" id="comments"></textarea>
              </td>
            </tr>
            <tr>
            <td></td>
              <td>
                <input name="submit" value="Submit" type="submit">
                <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">
                <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>" type="hidden">
              </td>
              
            </tr>
            <tr>
              <td></td>
              <td><a href="process.php?action=delivered&cid=<?php echo $cid; ?>">Marked this shipment as to be <span style="color: red">DELIVERED </span></a></td>
            </tr>
          </table>
          </center>

</body>
</html>
<?php } 
?>