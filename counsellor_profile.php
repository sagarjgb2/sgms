<?php
include('connection.php');
session_start();
// $pungiven=$_GET['pungiven'];
//         $query3="select complaint_id from investigation where investigation_id IN (select investigation_id from punishment where punishment_given = '$pungiven');";
//         // Execute the query
//         if($conn->query($query3) == true){
//           //echo "Successfully inserted";
//         }
//         else{
//           echo "ERROR: $query3 <br> $conn->error";
//           echo "ERROR noticed";
//         }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Counsellor Profile</title>
    <div class="mnu">
      <a
        href="index.php"
        style="
          text-decoration: none;
          padding: 12px 12px 12px 12px;
          color: rgb(15, 4, 77);
        "
        >Home</a
      >
      <a
        href="acCmpList.php"
        style="
          text-decoration: none;
          padding: 12px 12px 12px 12px;
          color: rgb(15, 4, 77);
        "
        >Complaint List</a
      >
      <a
        href="login.php"
        style="
          text-decoration: none;
          padding: 12px 12px 12px 12px;
          color: rgb(15, 4, 77);
        "
        >Logout</a
      >
    </div>

    <style>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
      .mnu {
        text-decoration: none;
        text-align: right;
        padding-right: 20px;
        padding-top: 20px;
      }
      input{
        padding: 7px 7px 7px 7px;
        border-radius: 4px;
        background-color: rgb(241, 237, 236);
      }
      input:hover{
        background-color: rgb(220, 220, 222);
      }
      a:hover {
        background-color: rgb(220, 220, 222);
        opacity: 100%;
        border-radius: 7px;
      }
      body {
        background-image: url(images_student/penpaper.jpg);
        background-size: 120%;
        background-repeat: no-repeat;
        background-position: right;
        margin: 5px;
        font-family: "Open Sans", sans-serif;
        background-color: rgb(82, 81, 81);
        color: rgb(15, 4, 77);
      }
      header{
		  float: left;
		  width: 50px;
	  }
	  img{
		  width: 200px;
		  /* display: flex; */
		 /* padding-left: 645px;  */
	  }
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th{
  color: #b71c1c;
}

td{
  color: black;
}

tr:nth-child(even) {
  background-color: #e0e0e0;
}

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 55%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 53%;
  left: 18.7%;
  transform: translate(-50%, -50%);
}
a{
  text-decoration: none;
}
    </style>
  </head>
  <body>
    <main>
    <header>
        <img src="images_student/jssate.png" alt="jss logo">
      </header>
      <section>
        <div style="float: left;">
          <h1 style="padding-top: 60px;">Hi, <?php echo $_SESSION['username']; ?></h1>
      <section>
     <div style="float: left;">
     <?php
$sql2="SELECT name, gender, age, email, phno from counsellor where counsellor_id='".$_SESSION['username']."'";
$result1 =$conn-> query($sql2);

if($result1==true){
    while($row = $result1-> fetch_assoc()){
      echo "
      <table>
  <tr>
  <th>NAME</th>
  <td>".$row["name"]."</td>
  </tr>
  <tr>
  <th>GENDER</th>
  <td>".$row['gender']."</td>
  </tr>
  <tr>
  <th>AGE</th>
  <td>".$row['age']."</td>
  </tr>
  <th>YEAR</th>
  <td>".$row['email']."</td>
  </tr>
  <th>PHONE NUMBER</th>
  <td>".$row['phno']."</td>
  </tr>
  
</table>";
      }
}
else{
    echo "No data found";
}
  ?>
     
      </section>
      <div class="search-pun">
       <form action="" method="get">
       <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" name="pungiven" placeholder="Enter Punishment type">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
       </form>
     </div>

     <div style="float: right; width: 5%; padding-left:400px; padding-top:0px; display:flex;">
     <table>
    <tr><th colspan="5" style="text-align: center;">COMPLAINTS ASSIGNED </th></tr>
    <tr>
      <th>INVESTIGATION_ID</th>
    <th>COMPLAINT_ID</th>
    <th>STATUS</th>
    <th>PRIORITY</th>
    <th>DELETE</th>
    <?php
$sql="SELECT * from `scms`.`investigation` where counsellor_id='".$_SESSION['username']."'";
$result=$conn-> query($sql);

if($result == true){
    while($row = $result-> fetch_assoc()){
        echo '<tr>';
        $del=$row['investigation_id'];
        echo '<td>'.$row['investigation_id'] .'</td>';
        echo '<td>'.$row['complaint_id'] .'</td>';
        echo '<td>'.$row['status'] .'</td>';
        echo '<td>'.$row['priority'] .'</td>';
        echo "<td><a href='delete.php?del=$del'<button type='button' class='btn btn-success'>Delete</button></td>";
        echo '</tr>';
        
    }
    echo "</table>";
}
else{
    echo "No complaints assigned.";
}
 ?> 
     </div>
    </main>
  </body>
</html>
