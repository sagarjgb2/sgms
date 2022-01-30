<?php
include('connection.php');
session_start();
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
     </div>
      </section>
    </main>
  </body>
</html>
