<?php
$mysqli = new mysqli('localhost', 'urcscon3_SanFran', 'coffee1N/!', 'urcscon3_SanFrancisco');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>