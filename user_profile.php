<?php 
include('db_connect_db_new.php');  
session_start();    
$r_id = $_SESSION['rid'];
$sql = "SELECT * FROM info_visitor WHERE ReceiptID = $r_id";
$re = mysqli_query($link, $sql);
$result = mysqli_fetch_array($re, MYSQLI_ASSOC);
?>
<html>
<head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        #col-1 {
            margin-left: -10%;
        }

        span {
            text-decoration: underline;
            font-size: 20px;
        }

        @media print {
            .hide-from-printer { 
                display: none; 
            }
        }

        .row {
            margin-top: 5%;
            margin-left: 20%;
        }

        @page {
            size: A4 landscape;
            float: none;
            width: auto;
            border: 0;
            margin: 0 5%;
            padding: 0;
            font-size: 13pt;
        }

        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #29292c !important;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #ff4d4d;
            border: 0;
            font-size: 15px !important;
            letter-spacing: 2px;
            opacity: 0.9;
            color: #000000;
        }
    </style> 
</head>
<body>
    <div class="row">
        <div class="col-sm-8">
            <p style="width: 678px;" id="col-1">Date: <?php echo $result['Date'];?></p>
            <br>
            <span id="col-1" name="main">Name: <?php echo $result['Name'];?></span><br>
            <span id="col-1">Contact No: <?php echo $result['Contact'];?></span><br>
            <span id="col-1">Purpose: <?php echo $result['Purpose'];?></span><br>
            <span id="col-1">Meeting: <?php echo $result['meetingTo'];?></span><br>
            <span id="col-1">Receipt ID: <?php echo $result['ReceiptID'];?></span><br>
            <span id="col-1">Comment: <?php echo $result['Comment'];?></span><br>
        </div>
    </div>
    <p style="text-align:center;padding-top:20px;"></p>
    <br>
    <br>
</body>
</html>
