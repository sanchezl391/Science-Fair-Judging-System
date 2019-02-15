<?php
$hn = 'earth.cs.utep.edu';
$un = 'cs_relopez6';
$pw = 'utepCS!7';
$db = 'f17cs4342team09';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

