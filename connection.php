<?php 
$host = "ec2-54-147-36-107.compute-1.amazonaws.com";
$port = "5432";
$dbname = "dahtlolq18757k";
$user = "hnkqyzvfxuigod";
$password = "476a2877b6cfd4410b7f001feda67092b2f3195d1a2a8449646e88b8a482b5e0"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);     
?>