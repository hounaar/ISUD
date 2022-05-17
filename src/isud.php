<?php

session_start();
include "library.php";

$obj = new library();
$connect = $obj->connection("","","");
$selector = $obj->selectOneTuple("","","","","","","");
$selectAll = $obj->selectAllTuples("","","","","","","");
$insertone = $obj->insertOneTuples("","","","","","","","");
$insertmult = $obj->insertMultTuples("","","","","","","","","","");
$updateone = $obj->updateOneTuple("","","","","","","");
$updateMultiple = $obj->updateMultTuples("","","","","","","","","","","","","","","","");
$deletetuple = $obj->deleteTuple("","","","","","","","","");


?>
