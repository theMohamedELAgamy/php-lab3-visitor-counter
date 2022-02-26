<?php
require_once("vendor/autoload.php");
 $num = counter::read_num_of_visitors();

echo"<center><h1>Counted uniqe visitors=$num</h1></center>";
