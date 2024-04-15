<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'portfoil_db';

$con = mysqli_connect($servername,$username,$password,$database);

if(!$con){
    echo "
    <div class='err' id='error'>
        <p>Please try to connect to internet</p>
    </div>
    ";
}
?>
<head>
    <style>
        .err{
            background-color: red;
            color: #fff;
            padding: 10px;
            margin-left: 10px;
            width: 50%;
            height: 50%;
            font-size: 20px;
            font-weight: 500;
        }
    </style>
</head>