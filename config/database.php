<?php

$sname = "db";

$uname = "developer";

$password = "developer";

$db_name = "developer";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3306);

if (!$conn) {

    echo "Connection failed!";
}
