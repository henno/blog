<?php
2
$connection = mysql_connect('localhost', 'root', '');
3
if (!$connection){
    4
    die("Database Connection Failed" . mysql_error());
5
}
6
$select_db = mysql_select_db('test');
7
if (!$select_db){
    8
    die("Database Selection Failed" . mysql_error());
9
}
