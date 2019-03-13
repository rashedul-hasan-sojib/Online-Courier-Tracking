<?php 
//session_start();
?>
<style>
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    margin-right: 150px;
    align-content: center;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
    margin-right: 150px;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    align-content: center;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
</style>

<div class="container">
  <a href="index.php">HOME</a>
  <a href="process.php?action=logOut">LOGOUT</a>

  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction1()">SHIPMENT</button>
    <div class="dropdown-content" id="myDropdown1">
      <a href="add-courier.php">Add</a>
      <a href="courier-list.php">Update</a>
      <a href="search-edit.php">Search &amp; Edit </a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction2()">REPORTS</button>
    <div class="dropdown-content" id="myDropdown2">
      <a href="delivered-list.php">Delivered </a>
      <a href="datewise-list.php">Datewise </a>
    </div>
  </div> 

  <?php
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>

  <div class="dropdown">
      <button class="dropbtn" onclick="myFunction3()">ADMIN MEMU</button>
      <div class="dropdown-content" id="myDropdown3">
        <a href="offices-list.php">Retail Center Details</a>
        <a href="add-office.php">Add New Retail Center</a>
        <a href="manager-list.php">Manager Details</a>
        <a href="add-new-officer.php">Add New Manager</a>
      </div>
    </div> 
  </div>  
  
<?php 
}
?>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown1");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }else if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown2");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }else if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown3");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>


