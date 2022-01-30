<?php
include('connection.php');
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student complaint list</title>
    <div class="mnu" style="text-align:right">
        <a href="student_profile.php" style="text-decoration:none; color: rgb(15, 4, 77); font-family: 'Open Sans', sans-serif; font-weight:Normal; padding: 12px 12px 12px 12px;">Dashboard</a>
        <a href="login.php" style="text-decoration:none; color: rgb(15, 4, 77); font-family: 'Open Sans', sans-serif; font-weight:Normal; padding: 12px 12px 12px 12px;">Logout</a>
    </div>
    <style>
         .mnu {
             padding-top: 13px;
        text-align: right;
        font-weight: normal;
      }
      a:hover{
        background-color: rgb(220, 220, 222);
        opacity: 100%;
          border-radius: 7px;
      }
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 58%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.stdlst{
    display: flex;
    text-decoration: none;
    float: right;
    margin-right: 40px;
    font-size: large;
    padding-top: 0px;
    margin-top: 0px;
    
}
h1{
    padding-top: 0px;
    margin-top: 0px;
    font-size: 20px;
}
    </style>
</head>
<body>
   
   <main>
   <table>
   <tr>
   <!-- <th>Complaint ID</th> -->
   <th>Abuser USN</th>
   <th>Abuse Type</th>
 </tr>
 <h1>Complaints registered by you</h1>
 <?php
   $query="SELECT `complaint`.`abuser_id`, `complaint`.`abuse_type` FROM `complaint` WHERE usn='".$_SESSION['username']."'";
   $result=$conn-> query($query);
   if($result == true){
       while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["abuser_id"] . "</td><td>" . $row["abuse_type"] . "</td></tr>";       }
       echo "</table>";
   }
   else{
       echo "No complaints registered by you";
   }


   ?>
   </table>
   <section class="stdlst">
       <div>
           <a href="std_list.php" style="text-decoration: none; padding: 10px 10px 10px 10px; background-color: #8d6e63; border-radius: 7px; color: white;">Student List</a>
       </div>
   </section>
   </main>

</body>
</html>