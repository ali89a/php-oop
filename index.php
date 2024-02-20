<?php

require 'vendor/autoload.php';

$obj = new \App\Models\User();

echo $obj->getUserName() . "<br><br>";
echo $obj->get() . "<br><br>";
echo $obj->getUser() . "<br><br>";
echo $obj->getStaff() . "<br><br>";



