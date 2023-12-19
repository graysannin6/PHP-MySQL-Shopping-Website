<?php
/* Christian-Jesus-Pereda-Rives - Team 3 */

//Connect to database.
$DBcon = new mysqli("localhost", "root", "", "sonicTechStore");

if ($DBcon->connect_errno) {
    die ("Error: ". $DBcon->connect_error);
}
?>