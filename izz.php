<?php
 session_start();
 if (isset($_SESSION['nik'])){
    header("location:home.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
     <title>login</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>login</h1>

         <style>
            h1{
                text-align: center;
            }
            body{
                background-color: aqua;
            }
            .alok{
                margin: 15px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .garis{
                border-style: solid;
                background-color: dark white;
            }


        </style>
        <form method="POST" action=>
            <input name="tujuan" type="hidden" value="LOGIN" >
            <div class="alok">
            <div class="garis">

            <label>username</label>
            <br>
            <input type="username"class ="form-control" id ="username"name="username">
            <br>
            <label>password</label>
            <br>
            <input type="password"class ="form-control" id ="password"name="password">
            <br>

            <button type=submit>Log In</button>
            <a link href="daftar.php"><button type="button">daftar</button><br>
        </div>
        </div>
        </form>
  </body>
   </html>