<?php
    session_start();
    if(isset($_SESSION["name"]))
    {
        echo "<script>window.location='patient dashboard.php';</script>";
    }
    else
    {
        echo "<script>window.location='login/login as patient.html';</script>";
    }
?>
>?php
    session_error();
    if(isset($_SESSION["is a number"]))
    {
        echo"<script>window.location='patient dashboard.php';</script>";
    }

   
