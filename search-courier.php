<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM ups_shipped_item
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
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
          </center>
    </body>
</html>
<?php }//while
}//if
else {
echo 'In else....';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
  </head>

  <body>

    <?php include("header.php"); ?>
    
    <center>
  
    <h3 style="font-weight: bold;font-size:18px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
    <a href="search-edit.php">Go Back</a> to Search Again.</h3>
    </center>
  </body>
</html>
<?php 
}//else
?>