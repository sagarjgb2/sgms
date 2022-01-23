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
    <title>SGMS Admin</title>

    <style>
      body {
        margin: 5px;
        font-family: "Open Sans", sans-serif;
        background-color: whitesmoke;
      }
      h1 {
        text-align: left;
        padding-left: 20px;
        padding-top: 20px;
        margin: 0px;
        font-size: 3vh;
        font-weight: bold;
        color: rgb(15, 4, 77);
      }
      .rightbox {
        float: right;
        text-decoration: none;
        text-align: middle;
        padding-right: 18px;
        width: 16%;
      }
      .std {
        text-align: justify;
        background-color: rgb(154, 216, 62);
        border-radius: 12px;
      }
      .coun {
        text-align: justify;
        background-color: rgb(119, 231, 231);
        border-radius: 12px;
        background-position: middle;
      }
      .mnu {
        padding-top: 10px;
        text-align: right;
        padding-right: 20px;
      }
      a:hover {
        background-color: rgba(202, 197, 197, 0.521);
        opacity: 100%;
        border-radius: 7px;
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
    </style>
    <div class="mnu">
      <a
        href="index.php"
        style="
          text-decoration: none;
          color: rgb(15, 4, 77);
          padding: 12px 12px 12px 12px;
        "
        >Home</a
      >
      <a
        href="logs.php"
        style="
          text-decoration: none;
          color: rgb(15, 4, 77);
          padding: 12px 12px 12px 12px;
        "
        >Logs</a
      >
      <a
        href="login.php"
        style="
          text-decoration: none;
          color: rgb(15, 4, 77);
          padding: 12px 12px 12px 12px;
        "
        >Logout</a
      >
    </div>
  </head>
  <body>
  <header>
		<img src="images_student/jssate.png" alt="jss logo">
	</header>
    <section>
      <h1>Welcome Admin !!!!!</h1>
    </section>
    <section>
      <div>
        <!--  for php code to display student and counsellor id and password assigned -->
      </div>
    </section>
    <section class="rightbox">
      <div class="add-del">
        <div class="std" style="padding: 30px 30px 30px 30px">
          <a
            href="astudent_redirect.php"
            style="
              text-decoration: none;
              color: rgb(15, 4, 77);
              padding: 12px 12px 12px 12px;
            "
            >Add Student</a
          ><br /><br />
          <a
            href="astudentdel_redirect.php"
            style="
              text-decoration: none;
              color: rgb(15, 4, 77);
              padding: 12px 12px 12px 12px;
            "
            >Delete Student</a
          ><br /><br />
        </div>
        <div>
          <br />
        </div>
        <div class="coun" style="padding: 30px 30px 30px 30px">
          <a
            href="acounsellor_redirect.php"
            style="
              text-decoration: none;
              color: rgb(15, 4, 77);
              padding: 12px 12px 12px 12px;
            "
            >Add Counsellor</a
          ><br /><br />
          <a
            href="acounsellordel_redirect.php"
            style="
              text-decoration: none;
              color: rgb(15, 4, 77);
              padding: 12px 12px 12px 12px;
            "
            >Delete Counsellor</a
          ><br /><br />
        </div>
      </div>
    </section>
  </body>
</html>
