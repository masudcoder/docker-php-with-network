<?php

$mysqli = new mysqli("database-server","root","111222","docker-db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  }
else {
	echo "DB Connected";
}